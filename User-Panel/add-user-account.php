<?php  include('user-header.php');?>

<h3>Add User Account</h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>

    <div class="col-md-6 text-left">
        <div class="card bg-primary mt-3 text-light p-3 ">
                <h2 class="pb-2">Cash App Payment Information</h2>

              <form action="" method="post" enctype="multipart/form-data">
                  <label for="">Your Name :</label>
                    <input style="font-size:large" name="sender_name" class="p-2 mb-2 form-control" type="text" placeholder="Sender Name"> 
                  <label for="">Your Tag :</label>
                    <input style="font-size:large" name="sender_tag" class="p-2 mb-2 form-control" type="text" placeholder="Sender Tag"> 
                  <label for="">Your Amount :</label>
                    <input style="font-size:large" name="amount" class="p-2 mb-2 form-control" type="text" placeholder="Amount"> 
                  <label for="">Upload Your Screenshot :</label>
                    <input class="form-control mb-2" type="file" name="fileToUpload">
                  <label for="">Others Text Here :</label>
                    <textarea style="max-height: 80px;" class="form-control" name="others_text" id="" cols="10" rows="10" placeholder="Others"></textarea>
                  
                    <input type="submit" class="btn btn-danger mt-3 btn-block" value="Submit Your Request">
              </form>



        </div>
    </div>

    <div class="col-md-3 text-left">
      
    </div>

</div>





<?php  include('user-footer.php');?>

