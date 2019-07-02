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
                        <br>
                        <h5 class= ml-md-2>Resources</h5>
                        <br><hr>
                        <div class="container-fluid">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="subscribe">Enter your email to subscribe:</label>
                                    <textarea type="text" rows="1" class="form-control" id="subscribe" placeholder="Enter your email" name="email"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success">Subscribe</button>
                                    <br>
                                </div>
                            </form>
                        </div>
            </div>
        </div>

                        <hr>
                        <?php // include 'important/resources.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
