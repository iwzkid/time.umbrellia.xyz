<?php
#form for adding an event
?>

<div class="container-fluid">
    <hr>
    <h5>Add event to agenda:</h5>
    <form method="POST">
        Name:
        <br>
        <input type="text" name="name_event" placeholder="name"/>
        <br>
        Location:
        <br>
        <input type="text" name="location_event" placeholder="location"/> 
        <br>
        Date & Time:
        <br>
        <input type="date" name="time_event" placeholder="date and time"/> 
        <br>
        Duration:
        <br>
        <input type="text" name="duration_event" placeholder="duration of event"/> 
        <br>
        Important:
        <br>
        <input type="checkbox" name="important_event"/> 
        <br>
        Recurring:
        <br>
        <input type="text" name="recurring_event" placeholder="reccurs for"/> 
        <br>
        <br>
        <button type="submit" class="btn btn-success">Add</button>
        <br>
    </form>
</div>
