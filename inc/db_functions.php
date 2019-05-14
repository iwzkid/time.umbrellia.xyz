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

//SELECT & DISPLAY EVENTS
$stmt = $pdo->query('SELECT * FROM events_table');

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
            echo '<td class="notes_time">' . $row['date_time'] . '</td>';
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