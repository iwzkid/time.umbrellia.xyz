<?php
#LOGIN BASIC PAGE - displays the login form and enables superuser functionality - add_calendar, add_notes, mark_important, delete
?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            Username:<br>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            Password:<br>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="button" id="sendlogin" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
#IF LOGIN IS SUCCESSFULL DO ->

include 'login/add_calendar.php';
include 'login/add_notes.php';
include 'login/important_or_delete.php';
include 'login/delete.php';