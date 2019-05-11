<?php 
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