<?php  include('user-header.php');?>


<div class="row">
    <div class="col-md-6">
        <h3>Withdraw</h3> 
    </div>
    <div class="col-md-6 text-end">
        <h3 class="text-primary"><a href="add-withdraw.php">Add Withdraw</a></h3>
    </div>
</div> 

<hr style="height: 2px;">

<div class="row">
    <div class="col-md-12">
        <div class="card bg mt-3 text-dark p-3 ">


<?php
    include "config.php";
    $query2 = " SELECT * FROM withdraw_2 ORDER BY withdraw_2.id DESC";

    $result2 = mysqli_query($connection, $query2) or die("Failed.");
    $count = mysqli_num_rows($result2);

    if($count > 0){
 
?>


            <table class="table table-bordered table-hover text-dark">
                <tr>
                    <th>SL. No</th>
                    <th>User ID</th>
                    <th>Transection ID</th>
                    <th>Payment Method</th>
                    <th>Balance</th>
                    <th>Amount (BDT)</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Time and Date</th>
                    <th>Update Data</th>
                </tr>

<?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result2)){
?>
                <tr>
                 <td class='id'><?php echo  $serial++ ?></td>
                    <td><?php echo $row['user_id'] ?></td>
                    <td><?php echo $row['Transection_ID'] ?></td>
                    <td><?php echo $row['Payment_method'] ?></td>
                    <td><?php echo  "$".  $row['Balance'] ?></td>
                    <td><?php echo $row['Amount_BDT']?></td>
                    <td><?php echo $row['Status'] ?></td>
                    <td><?php echo $row['Action'] ?></td>
                    <td><?php echo $row['Time_Date'] ?></td>
                    <td>
                        <a href="withdraw-edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="withdraw-delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
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