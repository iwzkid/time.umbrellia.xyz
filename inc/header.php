<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">

<!-- BASIC STUFF -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- MyCSS -->

<link rel="stylesheet" href="./css/style.css" />

<!-- Font Awesome -->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- DATE TIME PICKER - TEMPUS DOMINUS-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

<!-- MyScript -->

<script type="text/javascript" src="./js/script.js"></script>

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
         <a class="nav-link" href="index.php?page=important">Important</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=notes">Notes</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="index.php?page=login">Admin</a>
      </li>
   
   </ul>
  </div>
</nav>

</header>

<div class="container">
   <div class="row">
      <div class="col-md-12">