<?php
#form for adding an event
?>

<div class="container-fluid">
<hr>
    <div class="row">
        <div class="col-md-6"> 
            <h5>Add event to agenda:</h5>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name_event">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" placeholder="Location of event" name="location_event">
                </div>
                Date & Time:
                <br>
            <!--  <input type="date" name="time_event" placeholder="date and time"/> -->
                <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    <input type="text" name="time_event" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration_event">
                </div>
                Important:
                <br>
                <input type="checkbox" name="important_event"/> 
                <br>
                <div class="form-group">
                    <label for="recurring">Recurring:</label>
                    <input type="text" class="form-control" id="reccuring" placeholder="Reccurs for" name="recurring_event">
                </div>
                <button type="submit" class="btn btn-success">Add</button>
                <br>
                <br>
            </form>
        </div>

        <div class="col-md-6">
            <h5>Guidelines for adding an event:</h5>
        </div>
    </div>
</div>


