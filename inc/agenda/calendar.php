<?php
#CALENDAR (WEEK FORMAT) - default is set to current week
?>

    <div class="container_fluid" id="calendar">

    <?php 

    $daysofweek = array(
        'Monday' => array(),
        'Tuesday' => array(),
        'Wednesday' => array(),
        'Thursday' => array(),
        'Friday' => array(),
        'Saturday' => array(),
        'Sunday' => array()
    );

    if($_GET['week'] == 'prev'){
        $query = "SELECT *, DAYNAME(date_time) 'day' FROM events_table WHERE WEEK(date_time) = WEEK(NOW() - INTERVAL 7 DAY)";
    }elseif($_GET['week'] == 'next'){
        $query =  "SELECT *, DAYNAME(date_time) 'day' FROM events_table WHERE WEEK(date_time) = WEEK(NOW() + INTERVAL 7 DAY)";
    }else{
        $query = "SELECT *, DAYNAME(date_time) 'day' FROM events_table WHERE WEEK(date_time) = WEEK(NOW())";
    }

    $stmt = $pdo->query($query); 

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $daysofweek[ $row['day'] ][] = $row; 
    } 

    foreach($daysofweek as $dayname => $events){ ?>
        <div class="row">
            <h5><?php echo $dayname ?>:</h5>
            <br><hr>
            <?php if(!empty($events)){ 
                foreach($events as $event){
                    echo $event['name'];
                    echo $event['location'];
                    echo $event['date_time'];
                    echo '<br><hr>';
                }
             } else {
                echo 'There are no events for this day.';
            } ?>
        </div>
    <?php } ?>

</div>