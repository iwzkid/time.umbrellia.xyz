<?php
require dirname(__FILE__) . '/utils.php';

if($_GET['action'] == 'events'){

    // Parse the start/end parameters.
    // These are assumed to be ISO8601 strings with no time nor timeZone, like "2013-12-29".
    // Since no timeZone will be present, they will parsed as UTC.
    $range_start = parseDateTime($_GET['start']);
    $range_end = parseDateTime($_GET['end']);

    $start = $range_start->format('Y-m-d H:i:s');
    $end = $range_end->format('Y-m-d H:i:s');

    // Parse the timeZone parameter if it is present.
    $timeZone = null;
    if (isset($_GET['timeZone'])) {
        $timeZone = new DateTimeZone($_GET['timeZone']);
    }

    // Read and parse our events JSON file into an array of event data arrays.
    $query = "SELECT name 'title', important, location, date_time 'start', date_time + INTERVAL `duration` HOUR 'end' FROM events_table WHERE date_time > '$start' AND date_time + INTERVAL `duration` HOUR < '$end'";

    $stmt = $pdo->query($query); 

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $input_arrays[] = array(
            'title' => $row['title'] . ' ( '. $row['location'] . ' ) ',
            'start' => $row['start'],
            'end'   => $row['end'],
            'color' => $row['important'] == 1 ? 'red' : ''
        ); 

    }

    // Accumulate an output array of event data arrays.
    $output_arrays = array();
    foreach ($input_arrays as $array) {

        // Convert the input array into a useful Event object
        $event = new Event($array, $timeZone);

        // If the event is in-bounds, add it to the output
        if ($event->isWithinDayRange($range_start, $range_end)) {
            $output_arrays[] = $event->toArray();
        }
    }

    // Send JSON to the client.
    echo json_encode($output_arrays);

    exit();

}