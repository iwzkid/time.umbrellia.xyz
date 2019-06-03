<?php
#ENABLES - ADD NOTES functionality
?>

<div class="container-fluid">
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5>Add note:</h5>
            <form class="form-group" method="POST">
                Note:
                <br>
                <input type="text" name="note_text" placeholder="note"/>
                <br>
                Valid until:
                <br>
                <!-- <input type="date" name="valid_until" placeholder="display until"/> -->
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" name="valid_until" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-success">Add</button>
                <br>
            </form>
        </div>

        <div class="col-md-6">
            <h5>Guidelines for adding a note:</h5>
        </div>

    </div>
    <hr>
</div>



