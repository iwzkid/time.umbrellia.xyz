<?php include 'inc/header.php';?>

<?php
$title = "Time";
$metaD = "For Time Management!";

$page=$_GET['page'];

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

include 'inc/footer.php';