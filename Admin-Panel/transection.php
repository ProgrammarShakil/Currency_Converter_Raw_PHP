<?php  include('user-header.php');?>

<h3>Transections</h3> <hr style="height: 2px; margin:0">

<div class="row">
    <div class="col-md-12">

<?php
    include "config.php";
    $query2 = "SELECT * FROM user_sent_data ORDER BY id DESC";

    $result2 = mysqli_query($connection, $query2) or die("Failed.");
    $count = mysqli_num_rows($result2);

    if($count > 0){
 
?>

                  <table class="table text-dark table-bordered table-hover mt-4">
                     <thead>
                       <th>SL No.</th>
                       <th>User ID </th>
                       <th>Sender Name </th>
                       <th>Sender Tag </th>
                       <th>Sender Amount </th>
                       <th>Screenshot</th>
                       <th>Status</th>
                       <th>Reason</th>
                       <th>Others Text</th>
                       <th>Date</th>
                       <th class="m-5">Action</th>
                    </thead>
                      <tbody>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result2)){
?>
                          <tr>
                              <td class='id'><?php echo  $serial++ ?></td>
                              <td><?php echo $row['user_id'] ?></td>
                              <td><?php echo $row['sender_name'] ?></td>
                              <td><?php echo $row['sender_tag'] ?></td>
                              <td><?php echo $row['amount'] ?></td>
                              <td>
                                <?php if($row['screenshot'] ) { ?>    
                                    <img width="50px" src="../User-Panel/upload/<?php echo $row['screenshot'] ?>">
                                <?php } else { echo "No Image"; }  ?>
                                </td>                              <td><?php if($row['Status'] == 0) {echo "<div class='text-warning'> Pending </div>" ;} elseif($row['Status'] == 2) {echo "<div class='text-danger'> Rejected </div>" ;} else{echo "<div class='text-success'> Approved </div>" ;}?></td>
                              <td><?php echo $row['Reason'] ?></td>
                              <td><?php echo $row['sender_tag'] ?></td>
                              <td><?php echo $row['date_and_time'] ?></td>
                              <td>
                                <a class="" href="edit-status.php?id=<?php echo  $row['id'] ;?>">Edit</a>
                                <a onclick="return confirm('Are you sure?')" class=""  href="delete-status.php?id=<?php echo  $row['id'] ;?>">Delete</a>
                              </td>
                          </tr>

<?php }  ?>

                      </tbody>

<?php 
  
}else{
    echo " <div class='text-center'> Blank Database, Please Insert Data. </div> ";
     } 
?>      
                 </table> 

              </div>
          </div>
      </div>
  </div>

<?php include "user-footer.php"; ?>