<?php #HOME PAGE ?>

<div class="containter-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?php include 'home/upcoming.php';?>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <?php include 'home/reports_today.php';?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <?php include 'home/important_today.php';?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <?php include 'home/notes_today.php';?>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
</div>
