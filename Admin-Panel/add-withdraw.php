<?php include('config.php'); include('user-header.php');?>

<h3>User Withdraw </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>



    <div class="col-md-6 text-left">
        <div class="card bg-dark mt-3 text-light p-3 ">
                <?php
                    $sql = "SELECT user_id, username FROM userlogin";
                    $query = mysqli_query($connection, $sql);
                    $datas = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    // var_dump($datas);
                ?>
              <form action="" method="post">

                <select name="user_id" id=""  class="p-2 form-control mb-2">
                    <?php foreach($datas as $data) { ?>
                        <option value="<?= $data['user_id'] ?>"><?= $data['user_id'] ?> | <?= $data['username'] ?></option>
                    <?php } ?>
                </select>
                
                <input style="font-size:large" name="transection_id" placeholder="Transection ID" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="payment_method" placeholder="Payment Method" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="balance" placeholder="Balance" class="p-2 form-control mb-2" type="text"> 
                <input style="font-size:large" name="amount" placeholder="Amout_(BDT)" class="p-2 form-control mb-2" type="text"> 
                <select name="Status" id="" class="p-2 form-control mb-2">
                    <option value="Approved">Approved</option>
                    <option value="Hold">Hold</option>
                </select>
                <select name="action" id="" class="p-2 form-control mb-2">
                    <option value="Good">Good</option>
                    <option value="Not Good">Not Good</option>
                </select>
                <input type="submit" name="add-withdraw" class="btn btn-danger mt-3 btn-block mb-2" value="Add Withdraw">
              </form>
              
<?php

if (isset($_REQUEST['add-withdraw'])){
    


    $sender_id = mysqli_real_escape_string($connection,$_REQUEST['user_id']);
    $transection_id = mysqli_real_escape_string($connection,$_REQUEST['transection_id']);
    $payment_method = mysqli_real_escape_string($connection,$_REQUEST['payment_method']);
    $balance = mysqli_real_escape_string($connection,$_REQUEST['balance']);
    $amount = mysqli_real_escape_string($connection,$_REQUEST['amount']);
    $Status = mysqli_real_escape_string($connection,$_REQUEST['Status']);
    $action = mysqli_real_escape_string($connection,$_REQUEST['action']);

    if ($transection_id && $payment_method  && $balance && $amount && $Status &&  $action ) {
       

    if (!($connection)) {
       die('not connected');
    }

    $query = "INSERT INTO withdraw_2 (user_id, Transection_ID, Payment_method, Balance, Amount_BDT, Status, Action) VALUES ('$sender_id','$transection_id','$payment_method', '$balance', '$amount', '$Status', '$action')";

    $result = mysqli_query($connection,$query);

    if($result){
        echo "<font color='blue'>Withdraw Added Successfully.</font>";
    }
  }else{
      echo "<font color='red'>Withdraw Added Failed.</font>";
  }
}
?>


        </div>
    </div>
</div>







    <div class="col-md-3 text-left">
      
    </div>

</div>


<?php  include('user-footer.php');?>