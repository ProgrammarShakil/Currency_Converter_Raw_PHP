



<?php include('../header.php'); ?>

<div class="container">
    <div class="row col-md-6 g-4 py-5" style="margin: 0 auto;">
        <div class="col">
            <div class="card bg mt-3 text-light p-3">
                <div class="row">
                    <div class="col ms-2"></div>
                    <a href="register.php" class=" text-light col text-end me-2 text-decoration-none">Resigter</a>
                </div>
                <div class="card-body bg-primary">
                    <div class="">
                        <form  action="" method="post">
                            <div class="mb-3">
                                <div class="pb-3">Login Your Account</div>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-dark" style="width: 100%;">Login</button>
                        </form>

                        <?php
                        if(isset($_REQUEST['login'])) {
                            include "../user-panel/config.php";
                            $email = mysqli_real_escape_string($connection, $_REQUEST['email']);
                            $password = mysqli_real_escape_string($connection, md5($_REQUEST['password']));
                            $query = "SELECT user_id, username, email, role FROM userlogin WHERE email = '{$email}' AND password = '{$password}' ";
                            $result = mysqli_query($connection, $query) or die('Failed.') ;

                            if (mysqli_num_rows($result) > 0 ) {
                                while( $row = mysqli_fetch_assoc($result)){

                                  session_start();
                                  $_SESSION['username'] =  $row['username'];
                                  $_SESSION['email'] =  $row['email'];
                                  $_SESSION['user_id'] =   $row['user_id'];
                                  $_SESSION['role'] =  $row['role'];
                                  header("location: dashboard.php");
                                }
                                
                            } else {
                                echo "Username and Password are not Matched.";
                            }
                            
                        }
                        ?>






                        <br><div class="text-center "><a class="text-light" href="">Forgot your password ?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
