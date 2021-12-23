<?php
session_start();


include('user-header.php');?>

<h3>Add Method</h3> <hr style="height: 2px; margin:0">

<div class="row">
<div class="col-md-3 text-center">

</div>
    <div class="col-md-6 text-center">
        <div class="card bg-dark mt-3 text-light p-3 ">
           <h4> Add New Withdrawal Count</h4> <hr>
              <form action="" method="post" enctype="multipart/form-data">
                  <select  class="border p-2 form-control" name="method_name" id="" style="width: 100%;">
                            <option value="Bkash">Bkash</option>
                            <option value="Rocket">Rocket</option>
                            <option value="Bank">Bank</option>
                            <option value="Nogod">Nogod</option>
                  </select>

                <div>
                  <input name="method_number" class="form-control mt-3" type="number" placeholder="Phone Number">
                </div>
                  <input type="submit" name="add_method" class="btn btn-danger text-center mt-3 btn-block" value="Add Account"> 
              </form>




<?php

if (isset($_REQUEST['add_method'])){
    include('config.php');

    $method_name = mysqli_real_escape_string($connection,$_REQUEST['method_name']);
    $method_number = mysqli_real_escape_string($connection,$_REQUEST['method_number']);
    $session_id =  $_SESSION['user_id'];

    if ($method_name && $method_number) {

    if (!($connection)) {
       die('not connected');
    }

    $query = "INSERT INTO add_user_method ( user_id, method_name, method_number)
     VALUES ('$session_id','$method_name','$method_number')";


    $result = mysqli_query($connection,$query);

    if($result){
        echo "<font color='blue'> Added Successfull. </font>";
    }
  }else{
      echo "<font color='red'> Failed </font>";
  }
}
?>

</div>



        </div>
 
  
</div>


<?php  include('user-footer.php');?>