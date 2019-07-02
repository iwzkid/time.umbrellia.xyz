<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//Include Composer's autoloader
require 'vendor/autoload.php';

#include DB functions files
require 'inc/db_functions.php';

#
$auth = new \Delight\Auth\Auth($pdo);

# Include login functions
require 'inc/login/login_functions.php';

# Calendar events

require 'inc/agenda/events.php';

#include header
include 'inc/header.php';

$title = "Time";
$metaD = "For Time Management!";

#get page parameter
$page=$_GET['page'];

#based on page, include files
if($page == 'home' || $page==""){
    include 'inc/home.php';
}
elseif ($page == 'agenda'){
    include 'inc/agenda.php';
}
elseif ($page == 'important'){
    include 'inc/important.php';
}
elseif ($page == 'notes'){
    include 'inc/notes.php';
}
elseif ($page == 'login'){
    include 'inc/login.php';
}

#include footer
include 'inc/footer.php';