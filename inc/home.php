<?php #HOME PAGE ?>

<div class="containter-fluid">
    <br>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?php include 'home/upcoming.php';?>
                <br>
                <div class="card mx-sm-1 p-3">
                    Days left until exam session - Counter?
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card-body text-center">
                            <?php include 'home/reports_today.php';?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card-body text-center">
                            <?php include 'home/important_today.php';?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card-body text-center">
                            <?php include 'home/notes_today.php';?>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
</div>
