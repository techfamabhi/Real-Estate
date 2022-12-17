<?php
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
    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--        font link    -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
     <!--header start main-->
  
<div class="container">
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="d-flex justify-content-start">
                <i class="fa fa-building" style="font-size:56px"></i>
                <h4 class="px-2" style=" font-weight: 900;"><b>REAL ESTATE</b></h4> 
            </div>    
               <p class="ml-5 px-2" style="margin-top: -25px;" id="span1">REAL ESTATE</p>   
        </div>
        <div class="col-md-4">
            <div class="d-flex justify-content-start">
              <i class="fas fa-phone-alt"  style='font-size:36px'></i>
               <p class="ml-3"><span id="span1">Free Call </span><b>+1 234 456 78910</b></p>
            </div>    
                <p class="ml-5" style="margin-top: -15px;" id="text_color">Call Us Now 24/7 Customer Support</p>   
        </div>
        <div class="col-md-4">
            <div class="d-flex justify-content-start">
              <i class="fab fa-telegram-plane" style='font-size:36px'></i>
                  <h4 class="ml-2"><b>Our Location</b></h4> 
            </div>    
                <p class="ml-5" style="margin-top: -10px;" id="text_color">198 West 21th Street, Suite 721 New York NY 10016</p>   
        </div>
    </div>
</div>
    <!--end header -->
    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed">
        <div class="container text-uppercase p-2">
        <a class="navbar-brand" href="home.php">REAL ESTATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ml-5">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about2.php">About US</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="./flat_card.php">Find Property</a>
                </li>
			<li class="nav-item">
                    <a class="nav-link" href="./agent_list.php">Real Estate Agent</a>
                </li>
					
			   <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./enquiry.php">Enquiry</a>
                </li>
                <li class="nav-item">
                
                <form action="logout.php" method="post">
                   <input name="return" type="hidden" value="<?php echo urlencode($_SERVER['PHP_SELF']); ?>">
                   <input type="submit" value="LOGOUT" class="btn btn-primary"> 
                </form>
                </li>
            </ul>



        </div>
            </div>
        </div>
    </div>

        </div>
    </div>
    </nav>
    <!--navbar end-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--Get your own code at fontawesome.com-->
</body>

</html>