<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Registered Admin</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <?php 
                           $Query = "SELECT user_id from users ORDER BY user_id ";
                            $users_count = select($Query);
                            $row = mysqli_num_rows($users_count);
                            echo  $row ;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Daily Vistors</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                                 1      <!-- php code -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">New Messages</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                                  1      <!-- php code -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Order/ Requests</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                     1   <!-- php code -->
                            </div>
                        </div>
                    </div>
                </div>