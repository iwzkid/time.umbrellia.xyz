<?php
#ENABLES - ADD NOTES functionality
?>

<div class="container-fluid">
    <hr>
    <h5>Add note:</h5>
    <form method="POST">
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
    <hr>
</div>



