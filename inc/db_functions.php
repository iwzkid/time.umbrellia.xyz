<?php
#DB RELATED FUNCTIONS

#DB_data
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'time_umbrellia_xyz';

//DSN
$dsn = 'mysql:host='. $host .';dbname='. $db;

//PDO_instance
$pdo = new PDO($dsn, $user, $password);

//FORMAT DATE AND TIME

function format_datetime ($date) {
    return date('d-m H:i', strtotime($date));
}


//SELECT & DISPLAY NOTES
function display_notes() {
    global $pdo;

    $stmt = $pdo->query('SELECT * FROM notes_table');

        echo '<table class="notes-table">';

        echo '<thead>';
        echo '<th><h5>Notes:</h5></th><th><h5>Valid until:</h5></th>';
        echo '</thead>';

        echo '<tbody>';

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            //$increase = '<a href="?increase='.$row['id'].'">+</a>';
            //$delete = '<a href="?delete='.$row['id'].'">x</a>';

            echo '<tr>';
            echo '<td class="notes_column">' . $row['notes'] .'</td>';
            echo '<td class="notes_time">' . format_datetime($row['date_time']) . '</td>';
            echo '</tr>';

        } 

        echo '</tbody>';
        echo '</table>';     
}

//INSERT into notes table
if($_POST['note_text'] && $_POST['valid_until']) {
    $insert_query = 'INSERT INTO `notes_table`(`notes`, `date_time`) VALUES (?, ?)';
    $stmt = $pdo->prepare($insert_query);
    $stmt->execute([$_POST['note_text'], $_POST['valid_until']]);
}


//INSERT into events table
if($_POST['name_event'] && $_POST['location_event'] && $_POST['time_event'] && $_POST['important_event'] && $_POST['recurring_event']) {
    $insert_query = 'INSERT INTO `events_table`(`name`, `location`, `date_time`, `important`, `recurring`) VALUES (?, ?, ?, ?, ?)';
    $stmt = $pdo->prepare($insert_query);
    $stmt->execute([$_POST['name_event'], $_POST['location_event'], $_POST['time_event'], $_POST['important_event'], $_POST['recurring_event']]);
}

//DISPLAY ALL EVENTS ON THE IMPORTANT_OR_DELETE.php module
function display_events() {

global $pdo;

$stmt = $pdo->query('SELECT * FROM events_table');

echo '<table class="events-table">';
echo '<thead>';
echo '<th><h5>Name</h5></th><th><h5>Location</h5></th><th><h5>Date & Time</h5></th><th><h5>Important</h5></th><th><h5>Delete</h5></th>';
echo '</thead>';
echo '<tbody>';

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    //$important = '<a href="?mark_important='.$row['id'].'">Checkbox</a>';
    $delete = '<a href="?page=login&delete_event='.$row['id'].'">x</a>';

    echo '<tr>';
    echo '<td>' . $row['name'] .'</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . format_datetime($row['date_time']) . '</td>';
    echo '<td>' . $row['important'] . '</td>';
    //echo '<td>' . $important . '</td>';
    echo '<td>' . $delete . '</td>'; 
    echo '</tr>';

} 

echo '</tbody>';
echo '</table>';

}

//DELETE EVENT
if($_GET['delete_event']){

    $delete_query = 'DELETE FROM events_table WHERE id = ?';
    $stmt = $pdo->prepare($delete_query);
    $stmt->execute([$_GET['delete_event']]);

}

//DISPLAY NEXT 3 EVENTS
function upcoming_3 () {

    global $pdo;

$stmt = $pdo->query('SELECT * FROM events_table ORDER BY date_time asc LIMIT 3');

echo '<table class="upcoming3-table">';
echo '<thead>';
echo '<th><h5>Name</h5></th><th><h5>Location</h5></th><th><h5>Date & Time</h5></th>';
echo '</thead>';
echo '<tbody>';

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo '<tr>';
    echo '<td>' . $row['name'] .'</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . format_datetime($row['date_time']) . '</td>';
    echo '</tr>';

} 

echo '</tbody>';
echo '</table>';

}

//SELECT * events_table WHERE important=1 ORDER BY date_time asc ->UPCOMING EVENTS
