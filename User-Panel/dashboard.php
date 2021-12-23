<?php
session_start();
$_SESSION['user_id'];
include "config.php";
?>


<?php 

include('user-header.php'); ?>

<h3>Dashboard</h3> <hr style="height: 2px; margin:0">

<div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
        <div class="card bg-dark mt-3 text-light p-3 ">
            <div class="row">
               <div class="col-md-4">
                   <div class="pt-2 ps-3 text-warning "><h5>Today</h5></div>
               <div class="col "><img class="img-fluid border rounded" src="../images/1.png" alt="" style="border: 3px solid grey;"></div>
               </div>

               <div class="col-md-8">

<?php
    
    $sender_name_outside2 = $_SESSION['user_id'];

    $query5 = "SELECT DAYNAME(date_and_time) AS MNAME, SUM(amount) AS Total FROM user_sent_data  WHERE user_id = '{$sender_name_outside2}' AND status = 1 GROUP By MONTH(date_and_time) " ;

    $result5 = mysqli_query($connection, $query5) or die("Failed.");

    $rows2 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    $sum2 = 0;
    
    foreach($rows2 as $row2)  {
        
        $sum2 = $sum2+$row2['Total'];
        
    }

?>


                  <div>
                    <div>Balance</div>
                    <div><?= $sum2 ?>  BDT</div>
                    <div>Available Balance : <?= $sum2 ?> BDT</div>
                  </div>


                </div>

            </div>
        </div>
    </div>

    <div class="col">
        <div class="card bg-dark mt-3 text-light p-3 ">
            <div class="row">
            <div class="col-md-4">
                <div class="pt-2 ps-3 text-warning"><h6>Rejected</h6></div>
            <div class="col "><img class="img-fluid rounded" src="../images/2.png" alt=""></div>
            </div>

            <div class="col-md-8">
<?php
    
    $sender_name_outside2 = $_SESSION['user_id'];

    $query5 = "SELECT amount FROM user_sent_data WHERE user_id = '{$sender_name_outside2}' AND status = 2 ";

    $result5 = mysqli_query($connection, $query5) or die("Failed.");

    $rows2 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    $sum2 = 0;
    
    foreach($rows2 as $row2)  {
        
        $sum2 = $sum2+$row2['amount'];
        
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
        <div class="card bg-dark mt-3 text-light p-3 ">
            <div class="row">
               <div class="col-md-4">
                   <div class="pt-2 ps-3 text-warning"><h5>Total</h5></div>
               <div class="col "><img class="img-fluid rounded" src="../images/3.png" alt=""></div>
               </div>

               <div class="col-md-8">

<?php
    
    $sender_name_outside = $_SESSION['user_id'];

    $query = "SELECT amount FROM user_sent_data WHERE user_id = '{$sender_name_outside}' AND status = 1 ";

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

</div><hr style="height: 2px;">
<h3>Recent Transections</h3> 
<hr style="height: 2px;">


<div class="row">
    <div class="col-md-12">

<?php
    
    $sender_name_outside = $_SESSION['user_id'];

    $query2 = "SELECT * FROM user_sent_data WHERE user_id = '{$sender_name_outside}' ORDER BY id DESC LIMIT 2 ";

    $result2 = mysqli_query($connection, $query2) or die("Failed.");
    $count = mysqli_num_rows($result2);

    if($count > 0){
 
?>

                  <table class="table table-dark table-striped table-bordered">
                     <thead>
                     <th>Serial No.</th>
                       <th>Your Name </th>
                       <th>Your Tag </th>
                       <th>Your Amount </th>
                       <th>Screenshot</th>
                       <th>Others Text</th>
                       <th>Reason</th>
                       <th>Status</th>
                       <th>Time and Date</th>
                    </thead>
                      <tbody>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result2)){
?>
                          <tr>
                              <td class='id'><?php echo  $serial++ ?></td>
                              <td><?php echo $row['sender_name'] ?></td>
                              <td><?php echo $row['sender_tag'] ?></td>
                              <td><?php echo $row['amount'] ?></td>
                              <td>
                                <?php if($row['screenshot'] ) { ?>    
                                    <img width="50px" src="../User-Panel/upload/<?php echo $row['screenshot'] ?>">
                                <?php } else { echo "No Image"; }  ?>
                                </td>                              <td><?php echo $row['others_text'] ?></td>
                              <td><?php echo $row['Reason'] ?></td>
                              <td><?php if($row['Status'] == "0") {echo "Pending" ;} else{ echo "Approved";}?></td>
                              <td><?php echo $row['date_and_time'] ?></td>
                          </tr>

<?php }  ?>

                      </tbody>

<?php 
  
}else{
    echo " <div class='text-center mt-3 bg-dark p-5 text-light' style='border-radius: 5px;'> You Have No Transections. </div> ";
     } 
?>      
                 </table> 

              </div>
          </div>
      </div>
  </div>



<?php  include('user-footer.php');?>