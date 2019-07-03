<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">

<!-- CSS STUFF -->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- DATE TIME PICKER - TEMPUS DOMINUS-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css"/>

<!-- MyCSS -->

<?php if($_GET['page'] == 'agenda'){ ?>
   <link href='js/fullcalendar/core/main.css' rel='stylesheet' />
   <link href='js/fullcalendar/daygrid/main.css' rel='stylesheet' />
   <link href='js/fullcalendar/timegrid/main.css' rel='stylesheet' />
   <link href='js/fullcalendar/list/main.css' rel='stylesheet' />
   <link href='js/fullcalendar/bootstrap/main.css' rel='stylesheet' />
<?php } ?>

<link rel="stylesheet" href="./css/style.css"/>

<title>
   <?php 
   if(isset($title) && !empty($title)) { 
      echo $title; 
   } 
   else { 
      echo "Time"; 
   } ?>
</title>

</head>

<body>

<header>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

   <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_navbar">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="collapse_navbar">
      <a class="navbar-brand"><img src="./img/umbrellia.png" alt="umbrellia"></a>
   <!--   <span class="navbar-text">Time</span> -->

   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=home">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=agenda">Agenda</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=important">Important & Resources</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=notes">Notes</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=login">Admin</a>
      </li>
      <?php if ($auth->isLoggedIn()) { ?>
            <li class="nav-item ml-lg-auto">
               <a class="nav-link" href="index.php?logout=true">Logout</a>
            </li>
      <?php } ?>
   </ul>
  </div>
</nav>

</header>

<div class="container">
   <div class="row">
      <div class="col-md-12">