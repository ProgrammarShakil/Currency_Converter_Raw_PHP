<?php  include('user-header.php');?>

<h3>Add </h3> <hr style="height: 2px; margin:0">

<div class="row">
     <div class="col-md-3 text-left">
      
    </div>

    <div class="col-md-6 text-left">
        <div class="card bg-primary mt-3 text-light p-3 ">
                <h2 class="pb-2"></h2>
              <form action="">
                <input style="font-size:large" class="p-2 mb-2 form-control" type="text" placeholder="Payment Name"> 
                <input style="font-size:large" class="p-2 mb-2 form-control" type="text" placeholder="Account Number"> 
                <input style="font-size:large" class="p-2 mb-2 form-control" type="text" placeholder="Code"> 
                <select  class="border p-2" name="" id="" style="width: 100%;">
                    <option value="Zelle">Zelle</option>
                    <option value="Venmo">Venmo</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Cashapp">Cashapp</option>
                    <option value="Applepay">Applepay</option>
                    <option value="Googlepay">Googlepay</option>
                </select>

                <input type="submit" class="btn btn-danger mt-3 btn-block" value="Save New Link">
              </form>
        </div>
    </div>

    <div class="col-md-3 text-left">
      
    </div>

</div>


<?php  include('user-footer.php');?>