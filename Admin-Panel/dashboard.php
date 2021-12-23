<?php  include('user-header.php'); include "config.php"; ?>

<h3>Dashboard</h3> <hr style="height: 2px; margin:0">

<div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
        <div class="card bg mt-3 text-dark p-3 ">
            <div class="row">
               <div class="col-md-4">
                   <div class="pt-2 ps-3 text-danger"><h5>Today </h5></div>
               <div class="col "><img class="img-fluid border rounded" src="../images/1.png" alt="" style="border: 3px solid grey;"></div>
               </div>

               <div class="col-md-8">

<?php

    $query5 = "SELECT DAYNAME(date_and_time) AS MNAME, SUM(amount) AS Total FROM user_sent_data WHERE status = 1 " ;

    $result5 = mysqli_query($connection, $query5) or die("Failed.");

    $rows2 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    $sum2 = 0;
    
    foreach($rows2 as $row2)  {
        
        $sum2 = $sum2+$row2['Total'];
        
    }

?>


                  <div>
                    <div>Balance</div>
                    <div><?= $sum2 ?> BDT</div>
                    <div>Available Balance : <?= $sum2 ?> BDT</div>
                  </div>


                </div>

            </div>
        </div>
    </div>

    <div class="col">
        <div class="card bg mt-3 text-dark p-3 ">
            <div class="row">
            <div class="col-md-4">
            <div class="pt-2 ps-3 text-danger"><h6> Rejected</h6></div>
            <div class="col "><img class="img-fluid rounded" src="../images/2.png" alt=""></div>
           
            </div>

            <div class="col-md-8">



<?php

$query11 =  "SELECT amount FROM user_sent_data WHERE status = 2 ";

$result11 = mysqli_query($connection, $query11) or die("Failed.");

$rows11 = mysqli_fetch_all($result11, MYSQLI_ASSOC);

$sum11 = 0;

foreach($rows11 as $row11)  {
    
    $sum11 = $sum11+$row11['amount'];
    
}

?>


                <div>
                    <div>Balance</div>
                    <div><?= $sum11 ?> BDT</div>
                    <div>Available Balance : <?= $sum11 ?> BDT</div>
                </div>


                </div>

            </div>
        </div>
    </div>

    

    <div class="col">
        <div class="card bg mt-3 text-dark p-3 ">
            <div class="row">
               <div class="col-md-4">
                   <div class="pt-2 ps-3 text-danger"><h5>Total</h5></div>
               <div class="col "><img class="img-fluid rounded" src="../images/3.png" alt=""></div>
               </div>

               <div class="col-md-8">
 <?php

    $query = "SELECT amount FROM user_sent_data ";

    $result = mysqli_query($connection, $query) or die("Failed.");

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sum = 0;
    
    foreach($rows as $row)  {
        
        $sum = $sum+$row['amount'];
        
    }

?>


                  <div>
                    <div>Balance</div>
                    <div><?= $sum ?> BDT</div>
                    <div>Available Balance : <?= $sum ?> BDT</div>
                  </div>
   
                 

                </div>

            </div>
        </div>
    </div>

</div>

<hr style="height: 2px;">
<h3>Recent Transections</h3>
<hr style="height: 2px; margin:0">

<div class="row">
    <div class="col-md-12">
        <div class="card bg mt-3 text-dark p-3 ">


<?php
    include "config.php";
    $query2 = "SELECT * FROM withdraw_2 ORDER BY id DESC LIMIT 4";

    $result2 = mysqli_query($connection, $query2) or die("Failed.");
    $count = mysqli_num_rows($result2);

    if($count > 0){
 
?>


            <table class="table table-bordered table-hover text-dark">
                <tr>
                    <th>Serial No</th>
                    <th>Transection ID</th>
                    <th>Payment Method</th>
                    <th>Balance</th>
                    <th>Amount (BDT)</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Time and Date</th>
                </tr>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result2)){
?>
                <tr>
                 <td class='id'><?php echo  $serial++ ?></td>
                    <td><?php echo $row['Transection_ID'] ?></td>
                    <td><?php echo $row['Payment_method'] ?></td>
                    <td><?php echo  "$".  $row['Balance'] ?></td>
                    <td><?php echo $row['Amount_BDT']?></td>
                    <td><?php echo $row['Status'] ?></td>
                    <td><?php echo $row['Action'] ?></td>
                    <td><?php echo $row['Time_Date'] ?></td>
                </tr>
                
<?php }  ?>
<?php 
  
}else{
    echo " <div class='text-center'> You Don't have any Data. </div> ";
     } 
?>   
            </table>
        </div>
    </div>
</div>

<?php  include('user-footer.php');?>