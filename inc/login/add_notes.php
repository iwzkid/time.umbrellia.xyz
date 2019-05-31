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
        <input type="date" name="valid_until" placeholder="display until"/> 
        <br>
        <br>
        <button type="submit" class="btn btn-success">Add</button>
        <br>
    </form>
    <hr>
</div>



