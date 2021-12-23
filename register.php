<?php

include('header.php'); ?>

<div class="container">
    <div class="row col-md-6 g-4 py-5" style="margin: 0 auto;">
        <div class="col">
            <div class="card bg mt-3 text-light p-3">
                <div class="row">
                    <div class="col ms-2"></div>
                    <a href="login.php" class=" text-light col text-end me-2 text-decoration-none">Login</a>
                </div>
                <div class="card-body">
                    <div class="">
                        <form action="" method="post">
                            <div class="mb-3">
                                <div class="pb-3">Creat an Account</div>
                                <input name="hidden_input" type="hidden" value='<?php echo $_SESSION['user_id'] ?>' >
                                <input type="text" name="username" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                        </form>




<?php

if (isset($_REQUEST['submit'])){
    include('User-Panel/config.php');


    $username = mysqli_real_escape_string($connection,$_REQUEST['username']);
    $email = mysqli_real_escape_string($connection,$_REQUEST['email']);
    $phone_number = mysqli_real_escape_string($connection,$_REQUEST['phone_number']);
    $password = mysqli_real_escape_string($connection,md5($_REQUEST['password']));

    if ($username && $email  && $phone_number && $password ) {
       

    if (!($connection)) {
       die('not connected');
    }

    $query = "INSERT INTO userlogin (username, email, phone_number, password) VALUES ('$username','$email','$phone_number', '$password')";


    $result = mysqli_query($connection,$query);

    if($result){
        echo "<font color='green'>You are Successfully Registered. Login Now   </font>";
    }
  }else{
      echo "<font color='red'>Any field cannot be blank.</font>";
  }
}
?>

                        <br><div class="text-center"><a href="login.php">Forgot your password ?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>