<?php
#LOGIN FORM & LOGIN FUNCTIONS

include 'login/login_functions.php';
?>

<div class="container-fluid">
    <br>
    <h5>You must log in to use the admin page!</h5>
    <br><hr>
    <div class="row justify-content-center align-items-center">
        <div class="col-4">
        <br>
            <div class="card">
                <div class="card-body">
                    <form action="" autocomplete="off">
                        <div class="form-group" method="POST">
                            Username:<br>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            Password:<br>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" id="sendlogin" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        <br>
        </div>
    </div>
</div>