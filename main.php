<main class="container">
        <div class="3Card-body">
            <div class="row row-cols-1 row-cols-md-3">


         


<?php
    include "user-panel/config.php";
    
    $query3 = "SELECT * FROM payment_box ORDER BY payment_id DESC";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");
 
?>

<?php
         
         while($row = mysqli_fetch_assoc($result3)){
?>
               
                <div class="col">
                    <div class="card bg mb-4 text-light p-3">
                        <div class="row">
         <div class="col ms-2"> <img width="30px" src="Admin-Panel/uploads/<?php echo $row['payment_icon'] ?>"></div>
                            <div class="col text-end me-2"><?php echo  $row['payment_method'] ; ?></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="card-title">Name : <?php echo  $row['payment_name'] ;?></h5>
                                <p id="content-copy" class="card-text border "><?php echo  $row['account_number'] ;?></p>
                                <button id="btn-copy" class="btn btn-success rounded-pill">Copy - <?php echo  $row['payment_name'] ;?> Number</button>
                                <h4 class="pt-2 text-success">Running</h4>
                                <a href="login.php" style="background: none; text-decoration:none;"   class="btn text-success" >Request Submit</a>

                            </div>
                        </div>
                    </div>
                </div>

    
<?php }  ?>


            </div>

        </div>

        <div class="5Card-body">
           <div class="row">
                <div class="col-md-3">
                    <div class="card bg mt-3 text-light p-3">
                        <div class="row">
                            <div class="col ms-2 text-center pt-2 new"><i class="fas fa-star text-success "></i></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="pt-2 text-success text-light"> Best Rates on the Market</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg mt-3 text-light p-3">
                        <div class="row"> 
                            <div class="col ms-2 text-center pt-2 new"><i class="fas fa-hourglass-start text-success "></i></i></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="pt-2 text-success text-light"> Transparent Reasonable fees.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg mt-3 text-light p-3">
                        <div class="row">
                            <div class="col ms-2 text-center pt-2 new"><i class="far fa-clock text-success"></i></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="pt-2 text-success text-light"> Fast 5-30 Min Transections</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg mt-3 text-light p-3">
                        <div class="row">
                            <div class="col ms-2 text-center pt-2 new"><i class="fas fa-chart-bar text-success"></i></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="pt-2 text-success text-light"> High Exchange <br> Limits</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><br> <br> <hr> <br>
        
    </main> 

    <div class=" container payments">
        <div>
            <h2 class="text-center text-light">Payment Method</h2>
            <div class="col ms-2 text-center afterbefore"><i class="fas fa-dollar-sign"></i></div>
              <div class="text-center pt-2" style="width: 50%; margin-left:38%"><hr style="width: 50%; height:2px"></div>

            <br> <br>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid mb-4 img-thumbnail" src="images/b.png" alt="bank" width="500px">
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid mb-4 rounded" src="images/nn.png" alt="nogod" >
                </div>
                <div class="col-md-3 text-end">
                    <img class="img-fluid rounded mb-4" src="images/dutch-bangla.png" alt="dutch-bangla">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid rounded" src="images/d.png" alt="bank" >
                </div>
            </div>
        </div>
    </div>
