<?php #IMPORTANT - BASIC PAGE ?>

<div class="containter-fluid">
    <div class="row">
        <div class="col-md-6">
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="card border-danger mx-sm-1 p-3">
                            <div class="card-body text-center">
                                <?php include 'home/important_today.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="card border-danger mx-sm-1 p-3">
                            <div class="card-body text-center">
                                <?php include 'important/important_upcoming.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>

        <div class="col-md-6">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <br>
                        <h5 class= ml-md-2>Resources</h5>
                        <br>
                        <hr>
                        <?php include 'important/resources.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
