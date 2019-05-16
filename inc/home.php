<?php
#HOME PAGE
include 'home/jumbotron.php';?>

<div class="containter-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?php include 'home/upcoming.php';?>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <?php include 'home/reports_today.php';?>
                </div>
                <div class="row">
                    <?php include 'home/important_today.php';?>
                </div>
                <div class="row">
                    <?php include 'home/notes_today.php';?>
                </div>
            </div>
        </div>
</div>
