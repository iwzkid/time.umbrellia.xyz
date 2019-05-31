<?php
#DISPLAYS NOTES SORTED BY DATE&TIME - does not show expired notes, notes expire after the specified date.
# TREBUIE ADAUGAT BUTON DE SORT BY DATE AND TIME
//phpinfo();
//error_reporting(E_ALL);
//ini_set('display_errors', 1); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 notes-display card">
            <div class="card-body">
                <?php display_notes();?>
            </div>
        </div>
    </div>
</div>



