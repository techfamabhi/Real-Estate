<?php
include('header.php');
?>


<?php

include('connection.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];

$sql="INSERT INTO `contact`(`name`, `phone`, `subject`, `comment`) VALUES ('$name','$phone','$subject','$comment')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<script>alert('Contact Success')</script>";
  } else {
    echo "failed";
  }

}



?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--font awesome icon link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--        font link    -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- custom css link-->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body class="bg-light">
    <!---header image -->
    <header class="jumbotron back-image" style="background-image: url('image/44.jpg')">
        <div class="text-center text-danger " style="margin-top: 60px;;">
            <h1 class="font-weight-bold">CONTACT US</h1>
            <div class="font-weight-bold">
                <a href="home.html" class>Home</a><span>/Contact us</span>
            </div>
        </div>
    </header>
    <!--header end-->
    <!--contact us start-->
    <div class="container">
        <div class="text-center">
            <h2 class=" text-danger font-size-normal">CONTACT US NOW</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in hendrerit lacus. Curabitur pretium nisi convallis leo viverra hendrerit. Mauris ac lorem purus. Suspendisse potenti. Cras a tellus in quam tempus cursus. Donec euismod mattis
                blandit. Duis imperdiet est sed mi ornare tempus.</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-sm-12" style="background: #b3b3b3;">
                <div class="text-center py-4">
                    <i class="fa fa-map-marker" style="font-size:24px;color:green"></i>
                    <p class="mt-1">5520 Quebec Place Washington</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 " style="background: #bfbfbf">
                <div class="text-center py-4">
                    <i class="fa fa-envelope " style="font-size:24px;color:green"></i>
                    <p class="mt-1">contact@kitchendesign.com</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 " style="background:  #999999">
                <div class="text-center py-4">
                    <i class="fa fa-phone" style="font-size:24px;color:green"></i>
                    <p class="mt-1">+64 (1) 123 456 789</p>
                </div>
            </div>
        </div>
        <!--send us message-->
        <div class="text-center py-5">
            <h2 class=" text-danger font-size-normal">SEND US A MESSAGE</h2>
            <p>Donec vitae turpis volutpat, eleifend dolor vitae, consectetur erat vestibulum dignissim mollis mauris.
            </p>
        </div>



        <!--form start-->
        <div class="py-md-5">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="phone" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" rows="5" name="comment"></textarea>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-outline-success" name="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!--end form-->
    <!--send us message-->
    </div>
    <!--contact end-->
    <!--map start-->
    <div class="mt-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.5343087882115!2d75.91508331390953!3d17.672201987908498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da64017f2cad%3A0x9696761cef43dc11!2sVertex%20Technosys!5e0!3m2!1sen!2sin!4v1579022659862!5m2!1sen!2sin"
            width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--end map-->
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




<?php
include('footer.php');
?>

