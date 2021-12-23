<?php 

session_start();

include('user-header.php'); ?>

<h3>Your Transections</h3> <hr style="height: 2px;">

<div class="row">
    <div class="col-md-12">

<?php
    include "config.php"; 
    

    $sender_name_outside = $_SESSION['user_id'];

    $query2 = "SELECT * FROM user_sent_data WHERE user_id = '{$sender_name_outside}' ORDER BY id DESC ";

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
                                </td>
                              <td><?php echo $row['others_text'] ?></td>
                              <td><?php echo $row['Reason'] ?></td>
                              <td><?php if($row['Status'] == 0) {echo "<div class='text-warning'> Pending </div>" ;} elseif($row['Status'] == 2) {echo "<div class='text-danger'> Rejected </div>" ;} else{echo "<div class='text-success'> Approved </div>" ;}?></td>
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

<?php include "user-footer.php"; ?>