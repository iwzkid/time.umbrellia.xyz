<?php
#ENABLES - ADD NOTES functionality
?>

<div class="container-fluid">
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5>Add note:</h5>
            <form method="POST">
            <div class="form-group">
                <label for="note">Note:</label>
                <textarea type="text" rows="5" class="form-control" id="note" placeholder="Enter note" name="note_text"></textarea>
            </div>
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
                <br>
            </form>
        </div>

        <div class="col-md-6">
            <h5>Guidelines for adding a note:</h5>
            <br>
                <p>Note - Textarea for entering the note you wish to display.</p>
                <hr>
                <p>Valid Until - To specify when the note expires.</p>
                <hr>
        </div>
    </div>
    <hr>
</div>

<!--TESTIN-->



