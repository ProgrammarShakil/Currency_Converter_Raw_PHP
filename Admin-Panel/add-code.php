<?php  include('user-header.php');?>

<h3>Add Code </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>


    <div class="col-md-6 text-left">
        <div class="card bg-primary mt-3 text-light p-3 pt-5">
                
              <form action="add-code.php" method="POST" enctype="multipart/form-data">
                <input style="font-size:large" name="payment_icon" class=" form-control mb-2" type="file" placeholder="File Icon"> 
                <input style="font-size:large" name="payment_name" class="p-2 form-control mb-2" type="text" placeholder=" Payment Name"> 
                <input style="font-size:large" name="account_number" class="p-2 form-control mb-2" type="text" placeholder=" Account Number"> 
                <input style="font-size:large" name="account_code" class="p-2 mb-2 form-control" type="text" placeholder="Code"> 
                <select  class="border p-2 form-control" name="payment_method" id="" style="width: 100%;">
                    <option value="Zelle">Zelle</option>
                    <option value="Venmo">Venmo</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Cashapp">Cashapp</option>
                    <option value="Applepay">Applepay</option>
                    <option value="Googlepay">Googlepay</option>
                </select>
                <input type="submit" name="insert" class="btn btn-danger mt-3 btn-block mb-3" value="Add New Code">
            </form>



<?php

        if (isset($_REQUEST['insert'])){
            $payment_icon = $_FILES['payment_icon'];
            $payment_name = $_REQUEST['payment_name'];
            $account_number = $_REQUEST['account_number'];
            $payment_method = $_REQUEST['payment_method'];
            $account_code = $_REQUEST['account_code'];

            $img_name = $payment_icon['name'];
            $img_tmp_name = $payment_icon['tmp_name'];
            $name_changer = uniqid(). ".png";
        
            if(!empty($img_name)){
                $location ="uploads/";
                if(move_uploaded_file($img_tmp_name,$location.$name_changer)){
                }else{
                    echo "upload failed.";
                }
            }else{
                echo "Your File is Empty.<br>";
            }
        

            if ($payment_name && $account_number &&  $account_code ) {

             include "config.php";

            $query = "INSERT INTO payment_box (payment_name, account_number, account_code, payment_method, payment_icon ) VALUES ('$payment_name','$account_number', '$account_code', '$payment_method', '$name_changer')";


            $result = mysqli_query($connection,$query);

            if($result){
                echo "<font color='white'>Successfully Inserted.</font>";
            }
          }else{
              echo "<font color='white'>Insert Failed.</font>";
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
