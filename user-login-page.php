<?php
session_start();
$_SESSION['user_id'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand " href="#">Cash App</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-4 mb-lg-0 " style="text-align: right; margin: auto">
                        <li><a class="text-light me-3 ms-5 " href="User-Panel/dashboard.php"
                                style="text-decoration: none;">
                                
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 

                                Dashboard </a></li>
<?php
    include "User-Panel/config.php";
    
    $sender_name_outside2 = $_SESSION['user_id'];

    $query5 = "SELECT amount FROM user_sent_data WHERE user_id = '{$sender_name_outside2}' AND status = 2 ";

    $result5 = mysqli_query($connection, $query5) or die("Failed.");

    $rows2 = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    $sum2 = 0;
    
    foreach($rows2 as $row2)  {
        
        $sum2 = $sum2+$row2['amount'];
        
    }

?>
                        <li class="me-3" style=" color: grey"> Rejectd : <?= $sum2 ?> BDT </li>



<?php
    
    $sender_name_outside = $_SESSION['user_id'];

    $query = "SELECT amount FROM user_sent_data WHERE user_id = '{$sender_name_outside}' AND status = 0 ";

    $result = mysqli_query($connection, $query) or die("Failed.");

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sum0 = 0;
    
    foreach($rows as $row)  {
        
        $sum0 = $sum0+$row['amount'];
        
    }

?>




<li class="me-3 " style="color: #BD370B;"> Pending: <?= $sum0 ?>  BDT </li>



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




<li class="me-3" style=" color: green"> Total Balance: <?= $sum ?> BDT </li>

                        <li class="me-3" style=" color: grey"><img class="rounded-circle" width="20px"
                                src="images/profile.jfif" alt="profile img"> &nbsp;
                            User</li>
                    </ul>
                </div>
            </div>
        </nav>






        <hr>
    </header>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><div style="margin-left:100px"> Your Payment Information </div></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label  class="text-success" for="">Your Name :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Span class="text-danger">(Don't Change Your Name)</Span> </label>
                        <input  style="font-size:large" name="sender_name" class="p-2 mb-2 mt-1 form-control" type="text"
                            value="<?php echo $_SESSION['username'] ?>">
                        <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="user_id">
                        <label  class="text-success" for="">Your Tag :</label>
                        <input style="font-size:large" name="sender_tag" class="p-2 mb-2 form-control mt-1" type="text"
                            placeholder="Sender Tag">
                        <label  class="text-success" for="">Your Amount :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Span class="text-danger">(Must Add Amount)</Span> </label>
                        <input style="font-size:large" name="amount" class="p-2 mb-2 form-control mt-1" type="text"
                            placeholder="Amount">
                        <label  class="text-success" for="">Upload Your Screenshot :</label>
                        <input class="form-control mb-2 mt-1" type="file" name="screenshot">
                        <label class="text-success" for="">Others Text Here :</label>
                        <textarea style="max-height: 80px;" class="form-control mt-1" name="others_text" id="" cols="10"
                            rows="10" placeholder="Others"></textarea>

                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-secondary mt-3"
                                    data-bs-dismiss="modal">Close</button> 
                            </div>
                            <div class="col-md-6"> </div>
                            <div class="col-md-3">
                                <input type="submit" name="send" class="btn btn-danger mt-3 " value="Submit">
                            </div>
                        </div>




                        <?php 
                     

if (isset($_REQUEST['send'])){
    include('User-Panel/config.php');
    $sender_name = mysqli_real_escape_string($connection,$_REQUEST['sender_name']);
    $sender_userId = mysqli_real_escape_string($connection, $_REQUEST['user_id'] );
    $sender_tag = mysqli_real_escape_string($connection,$_REQUEST['sender_tag']);
    $amount = mysqli_real_escape_string($connection,$_REQUEST['amount']);
    $screenshot = $_FILES['screenshot'];
    $others_text = mysqli_real_escape_string($connection,$_REQUEST['others_text']);



    $img_name = $screenshot['name'];
    $img_tmp_name = $screenshot['tmp_name'];
    $name_changer = uniqid(). ".png";

    // if(!empty($img_name)){
    //     $location ="user-panel/upload/";
    //     if(move_uploaded_file($img_tmp_name,$location.$name_changer)){
    //         // header("location: index.php");
    //     }else{
    //         echo "upload failed.";
    //     }
    // }
    // else{
    //     echo "Your File is Empty.<br>";
    // }


        if ($sender_name && $amount) {
        
            // if (!($connection)) {
            //     die('not connected');
            // }

            if(!empty($img_name)) {
                $location ="user-panel/upload/";
                move_uploaded_file($img_tmp_name, $location.$name_changer);

                $query = "INSERT INTO user_sent_data(sender_name, user_id, sender_tag, amount, screenshot, others_text) VALUES ('$sender_name','$sender_userId','$sender_tag','$amount', '$name_changer', '$others_text')";


                $result = mysqli_query($connection,$query);

                if($result){
                    // header('location: User-Panel/transection.php');
                    // var_dump($name_changer);
                    // echo "Submitted Data Successfully";
                    echo "
                        <script>
                            window.location = 'User-Panel/transection.php';
                        </script>
                    ";
                } 
            
            } else {
                $query = "INSERT INTO user_sent_data(sender_name, user_id, sender_tag, amount, screenshot, others_text) VALUES ('$sender_name','$sender_userId','$sender_tag','$amount', '', '$others_text')";

                $result = mysqli_query($connection,$query);

                if($result){
                    // header('location: User-Panel/transection.php');
                    // var_dump($name_changer);
                    // echo "Submitted Data Successfully";
                    echo "
                        <script>
                            window.location = 'User-Panel/transection.php';
                        </script>
                    ";
                }
            }
            
        } else {
            echo "<font color='red'>Name and Amount Required.</font>";


        }
}

?>




                    </form>
                </div>

            </div>
        </div>
    </div>










    <main class="container">
        <div class="3Card-body">
            <div class="row row-cols-1 row-cols-md-3">




                <?php
    include "user-panel/config.php";
    $query3 = "SELECT * FROM payment_box ORDER BY payment_id DESC";

    $result3 = mysqli_query($connection, $query3) or die("Failed.");
 
?>

                <?php
         $serial = 1;
         while($row = mysqli_fetch_assoc($result3)){
?>

                <div class="col">
                    <div class="card bg mt-4 text-light p-3">
                        <div class="row">
                            <div class="col ms-2">
                            <img width="30px" src="Admin-Panel/uploads/<?php echo $row['payment_icon'] ?>">
                                </div>
                            <div style="font-size: 20px;" class="col text-end me-2"><?php echo  $row['payment_method'] ; ?></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <h5 class="card-title">Name : <?php echo  $row['payment_name'] ;?></h5>
                                <p id="content-copy" class="card-text border "><?php echo  $row['account_number'] ;?>
                                </p>
                                <button id="btn-copy" class="btn btn-success rounded-pill">Copy -
                                    <?php echo  $row['payment_name'] ;?> Number</button>
                                <h4 class="pt-2 text-success">Running</h4>
                                <button style="background: none;" type="button" class="btn text-success"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@getbootstrap">Request Submit</button>

                            </div>
                        </div>
                    </div>
                </div>


                <?php }  ?>

    </main>




    <div class="container">
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
                        <div class="col ms-2 text-center pt-2 new"><i
                                class="fas fa-hourglass-start text-success "></i></i></div>
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

    </div>





    <div class=" container payments">
        <div>
            <h2 class="text-center text-light mt-4">Payment Method</h2>
            <div class="col ms-2 text-center afterbefore"><i class="fas fa-dollar-sign"></i></div>
            <div class="text-center pt-2" style="width: 50%; margin-left:38%">
                <hr style="width: 50%; height:2px">
            </div>

            <br> <br>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid mb-4 img-thumbnail" src="images/b.png" alt="bank" width="500px">
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-fluid mb-4 rounded" src="images/nn.png" alt="nogod">
                </div>
                <div class="col-md-3 text-end">
                    <img class="img-fluid rounded mb-4" src="images/dutch-bangla.png" alt="dutch-bangla">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid rounded" src="images/d.png" alt="bank">
                </div>
            </div>
        </div>
    </div>




    <?php include('footer.php'); ?>