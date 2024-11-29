<!DOCTYPE html>
<html>      
    <?php 
        $title = 'Login - Admin Panel';
        require '../../includes/header.php';
        require '../../../class/cls_db.php';

        if(isset($_SESSION['admin']))
        header("location: home.php");

        $method = $_SERVER['REQUEST_METHOD'];

        if($method == 'POST'){
            foreach($_POST as $name => $value)
                $$name=$value;

            authenticate($email, $password);
         }
        ?>
    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3>
                                     <p class="text-danger fs--1"><?php
                                         if (isset($_GET['message'])){
                                            echo $_GET['message'];} ?></p>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <!-- <a class="btn btn-primary">Login</a> -->
                                                <button class="btn btn-primary" type="submit" name="submit">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
                </footer>
            </div>
        </div>
        <?php require '../includes/footer-script.php';  ?>
    </body>
</html>
