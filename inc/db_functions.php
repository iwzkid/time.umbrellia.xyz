<?php
#DB RELATED FUNCTIONS

    //below  will give the whole connectionstring in a single string
    $conn = getenv("MYSQLCONNSTR_localdb"); 

    //Let's split it and decorate it in an array
    $conarr2 = explode(";",$conn); 
    $conarr = array();
    foreach($conarr2 as $key=>$value){
        $k = substr($value,0,strpos($value,'='));
        $conarr[$k] = substr($value,strpos($value,'=')+1);
    }
    // $conarr is an array of values of connection string
    print_r($conarr); 

#DB_data
$host = '127.0.0.1:55109';
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

    $stmt = $pdo->query('SELECT * FROM notes_table WHERE date_time > NOW() ORDER BY date_time asc');

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
if($_POST['name_event'] && $_POST['location_event'] && $_POST['time_event'] && $_POST['duration_event'] && $_POST['recurring_event']) {
    $important_event = (isset($_POST['important_event'])) ? 1 : 0;
    $insert_query = 'INSERT INTO `events_table`(`name`, `location`, `date_time`, `duration` , `important`, `recurring`) VALUES (?, ?, ?, ?, ?, ?)';
    $stmt = $pdo->prepare($insert_query);
    $stmt->execute([$_POST['name_event'], $_POST['location_event'], $_POST['time_event'], $_POST['duration_event'], $important_event, $_POST['recurring_event']]);
}

//MARK AS IMPORTANT or DELETE SECTION

//DISPLAY ALL EVENTS ON THE IMPORTANT_OR_DELETE.php module

function display_events() {

$mark_important = isset($_POST["mark_important"]) ? 1 : 0;

global $pdo;

$stmt = $pdo->query('SELECT * FROM events_table WHERE date_time >= NOW() ORDER BY date_time asc');

echo '<table class="table table-hover events-table">';
echo '<thead>';
echo '<th><h5>Name</h5></th><th><h5>Location</h5></th><th><h5>Date & Time</h5></th><th><h5>Important</h5></th><th><h5>Delete</h5></th>';
echo '</thead>';
echo '<tbody>';

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $valuefromdb = $row['important'];
    $mark_important = (bool)$valuefromdb; //1 = true, 0 = false

    //var_dump($mark_important);
    if ($mark_important == '1') {
        $checkbox_state="checked";
        $important_checkbox = '<input type="checkbox" class="important_checkbox" name="mark_important" checked=' . $checkbox_state . '/>';
    } else {
        $important_checkbox = '<input type="checkbox" class="important_checkbox" name="mark_important"/>';
    } 

    //$important_checkbox = '<a href="?mark_important='.$row['id'].'"><input type="checkbox" name="mark_important" checked=' . $checkbox_state . '></input></a>';
    $delete = '<a class="delete_event" href="?page=login&delete_event='.$row['id'].'">x</a>';

    echo '<tr data-id="' . $row['id'] . '">';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . format_datetime($row['date_time']) . '</td>';
    echo '<td>' . $important_checkbox . '</td>';
    echo '<td>' . $delete . '</td>'; 
    echo '</tr>';

} 

echo '</tbody>';
echo '</table>';

}

//DELETE EVENT
if($_POST['delete_event']){

    $delete_query = 'DELETE FROM events_table WHERE id = ?';
    $stmt = $pdo->prepare($delete_query);
    $stmt->execute([$_POST['id']]);
    echo 'Successfully deleted row';
    exit();
}

//UPDATE
if( isset($_POST['mark_important']) ){
    $mark_important = $_POST['mark_important'] == "true" ? 1 : 0;

    var_dump($mark_important);

    $important_query = "UPDATE `events_table` SET `important`='$mark_important' WHERE id=?";
    $stmt = $pdo->prepare($important_query);
    $stmt->execute( [ $_POST['id']]);
    echo 'true';
    exit();
}

//END OF SECTION

//DISPLAY NEXT 3 EVENTS
function upcoming_3 () {

    global $pdo;

    $stmt = $pdo->query('SELECT * FROM events_table WHERE DAY(date_time) >= DAY(NOW()) AND MONTH(date_time) = MONTH(NOW()) OR DAY(date_time) < DAY(NOW()) AND MONTH(date_time) > MONTH(NOW()) ORDER BY date_time asc LIMIT 3');

    echo '<table class="table table-responsive-md table-bordered">';
    echo '<thead>';
    echo '<th>Name</th><th>Location</th><th>Date&Time</th>';
    echo '</thead>';
    echo '<tbody>';

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
    echo '<tr>';
    echo '<td>' . $row['name'] .'</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . format_datetime($row['date_time']) . '</td>';
    echo '</tr>';

    } 

    echo '</tbody>';
    echo '</table>';

}

//Event Count for today - EVENTS LEFT
function eventsleft_count() {

    global $pdo;

    $eventscountquery = "SELECT COUNT(*) 'count' FROM events_table WHERE DAY(date_time)=DAY(NOW()) AND MONTH(date_time)=MONTH(NOW()) AND date_time > NOW()";

    $stmt = $pdo->query($eventscountquery);

    $result = $stmt->fetch();

    if(!empty($result)){
        echo $result['count'];
    }else{
        echo "There are no events left for today";
    }
}

//IMPORTANT for TODAY
function important_today(){

    global $pdo;

    $stmt = $pdo->query('SELECT * FROM events_table WHERE DAY(date_time) = DAY(NOW()) AND MONTH(date_time) = MONTH(NOW()) AND important = 1');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    echo $row['name'].' '.$row['location'].' '.format_datetime($row['date_time']).'<br>';

    } 
}

//NOTES WITH TIGHT DEADLINES

function notes_deadline() {

    global $pdo;

    $stmt = $pdo->query('SELECT * FROM notes_table WHERE date_time >= NOW() ORDER BY date_time asc LIMIT 3');

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        echo $row['notes'].' '.format_datetime($row['date_time']).'<br>';

        } 

   $result = $stmt->fetch();

}

//IMPORTANT UPCOMING 3 EVENTS

function important_upcoming3(){

    global $pdo;
    
    $stmt = $pdo->query('SELECT * FROM events_table WHERE DAY(date_time) >= DAY(NOW()) AND MONTH(date_time) >= MONTH(NOW()) AND important = 1 ORDER BY date_time asc LIMIT 3');

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
        echo $row['name'].' '.$row['location'].' '.format_datetime($row['date_time']).'<br>';
    
        } 
    }

    //SELECT & DISPLAY NOTES
function display_expirednotes() {
    global $pdo;

    $stmt = $pdo->query('SELECT * FROM notes_table WHERE date_time < NOW() ORDER BY date_time desc LIMIT 5');

        echo '<table class="notes-table">';

        echo '<thead>';
        echo '<th><h5>Notes:</h5></th><th><h5>Expired on:</h5></th>';
        echo '</thead>';

        echo '<tbody>';

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            echo '<tr>';
            echo '<td class="notes_column">' . $row['notes'] .'</td>';
            echo '<td class="notes_time">' . format_datetime($row['date_time']) . '</td>';
            echo '</tr>';

        } 

        echo '</tbody>';
        echo '</table>';     
}