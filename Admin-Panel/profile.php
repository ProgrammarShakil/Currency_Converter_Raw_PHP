<?php  include('user-header.php');


?>

<h3>Profile</h3> <hr style="height: 2px; margin:0">
<div class="row">
    <div class="col-md-4" >
        <div class="card bg mt-3 text-dark p-3 text-center">
                <div class="row">
                <div class="col-md-12">
                    <div>
                        <img height="100px" width="100px" style="border-radius: 50%; border:4px solid #ccc" src="../images/profile.png" alt="">
                        <h4 class="pt-3">Ridoy Khan</h4> <hr>
                        <div>
                            <div class="row">
                                <div class="col-md-6 text-start">Available Balance :</div>
                                <div class="col-md-6 text-end">0.00 BDT</div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-6 text-start">On Hold :</div>
                                <div class="col-md-6 text-end">0.00 BDT</div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-6 text-start">Pending :</div>
                                <div class="col-md-6 text-end">0.00 BDT</div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
        </div>
    </div>
    <div class="col-md-8" >
      <div class="card bg mt-3 text-dark p-3 ">
        <div class="row">
         <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg mt-3 text-dark p-3 text-start">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="post">
                                    <h4 class="p-3 bg-primary mb-2 text-light" style="border-radius: 3px;">My Profile</h4>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name *</label>
                                    <input name="usrname" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email *</label>
                                    <input name="email_update" value="" type="email" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="update_email" class="btn btn-primary btn-block">Save</button>
                                </form>
                            </div>


<?php

if (isset($_REQUEST['update_email'])){
    include('config.php');
    $usrname = mysqli_real_escape_string($connection,md5($_REQUEST['usrname']));
    $email_update = mysqli_real_escape_string($connection,md5($_REQUEST['email_update']));

    if ( $usrname && $email_update) {
       
    $query2 = "UPDATE userlogin SET username = '$usrname',  email = '$email_update'  WHERE session_id = 1 ";


    $result2 = mysqli_query($connection,$query2);

    if($result2){
        echo "<font color='green'> Updated Username and Password.</font>";
    }
  }else{
      echo "<font color='red'> Username and Password Update Failed. </font>";
  }
}
?>






                        </div>
                    </div>
                    </div>
                        <div class="col-md-6">   
                
                                
                            <div class="card bg mt-3 text-dark p-3 text-start">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <form action="" method="post">
                                                <h4 class="p-3 bg-primary mb-2 text-light" style="border-radius: 3px;">Reset Pasword</h4>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Old Password *</label>
                                                <input name="old_password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">New Password *</label>
                                                <input  name="new_password" type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <button name="pass_update" type="submit" class="btn btn-primary btn-block">Save</button>
                                            </form>
                                        </div>





<?php

if (isset($_REQUEST['pass_update'])){
    include('config.php');
    $old_password = mysqli_real_escape_string($connection,md5($_REQUEST['old_password']));
    $new_password = mysqli_real_escape_string($connection,md5($_REQUEST['new_password']));

    if ( $old_password && $new_password) {
       
    $query = " UPDATE userlogin SET password = '$new_password' WHERE session_id = 1 ";


    $result = mysqli_query($connection,$query);

    if($result){
        echo "<font color='green'>Password Changed Succesfully.</font>";
    }
  }else{
      echo "<font color='red'>Password Changed Failed.</font>";
  }
}
?>




                                    </div>
                                </div>  
                            
                                </div>
                            </div>  

                                        </form>
                                    </div>

                                </div>
                            </div>                   
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php  include('user-footer.php');?>