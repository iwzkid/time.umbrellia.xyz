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
                <br>
                <p>Name - Please specify the name of the event.</p>
                <hr>
                <p>Location - Please specify the location of the event.</p>
                <hr>
                <p>Date & Time - To advise on when the event is taking place.</p>
                <hr>
                <p>Important - If ticked, the event will be more visible.</p>
                <hr>
                <p>Recurring - Based on the value from this box, the event will be inserted into the database as per below:
                    <br>
                        1 - only 1 insert
                    <br>
                        2 - inserted for the date & time when it will take place + the following week
                    <br>
                    The bigger the value is, the more weeks will have this event.</p>
        </div>
    </div>
</div>


