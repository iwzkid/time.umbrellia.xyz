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
        echo '<th><h5>Notes</h5></th><th><h5>Date</h5></th>';
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
