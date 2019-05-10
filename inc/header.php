<!DOCTYPE html>

<html>

<head>

<meta name="description" content="<?php

   if(isset($metaD) && !empty($metaD)) { 
      echo $metaD; 
   } 
   else { 
      echo "Some meta description"; 
   } ?>" />

<title>
   <?php 
   if(isset($title) && !empty($title)) { 
      echo $title; 
   } 
   else { 
      echo "Default title tag"; 
   } ?>
</title>

<link rel="stylesheet" href="css/style.css" />

</head>

<body>

<header>

<nav>

   <div><img src="images/logo.jpg" alt="logo"></div>

   <ul>

      <li><a href="">Link 1</a></li>

      <li><a href="">Link 2</a></li>

      <li><a href="">Link 3</a></li>

      <li><a href="">Link 4</a></li>

   </ul>

</nav>

</header>

<div class="container">