<?php
//login
if($_POST['username'] && $_POST['password']){

    try {
        $auth->loginWithUsername($_POST['username'], $_POST['password']);
    }
    catch (\Delight\Auth\InvalidEmailException $e) {
        die('Wrong email address');
    }
    catch (\Delight\Auth\InvalidPasswordException $e) {
        die('Wrong password');
    }
    catch (\Delight\Auth\EmailNotVerifiedException $e) {
        die('Email not verified');
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
        die('Too many requests');
    }

}

if($_GET['logout']){

    $auth->logOut();

}