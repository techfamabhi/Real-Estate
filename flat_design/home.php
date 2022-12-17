<?php
session_start();
if(isset( $_SESSION['email']))
{

}
else
{
    header('location:login.php');
}
?>


<?php
include('header.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <!--        font link    -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  <!-- start slider link -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <!-- End slider link -->
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 500px;
  }











  
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
    background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
    background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
  }
  
  .hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    padding: 3em;
    text-align: left;
  }
  
  .hovereffect img {
    display: block;
    position: relative;
    max-width: none;
    width: calc(100% + 60px);
    height: 330px;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
    transition: opacity 0.35s, transform 0.45s;
    -webkit-transform: translate3d(-40px,0,0);
    transform: translate3d(-40px,0,0);
  }
  
  .hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    position: relative;
    font-size: 17px;
    background-color: transparent;
    padding: 15% 0 10px 0;
    text-align: left;
  }
  
  .hovereffect .overlay:before {
    position: absolute;
    top: 20px;
    right: 20px;
    bottom: 20px;
    left: 20px;
    border: 1px solid #fff;
    content: '';
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
    transition: opacity 0.35s, transform 0.45s;
    -webkit-transform: translate3d(-20px,0,0);
    transform: translate3d(-20px,0,0);
  }
  
  .hovereffect a, .hovereffect p {
    color: #FFF;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
    transition: opacity 0.35s, transform 0.45s;
    -webkit-transform: translate3d(-10px,0,0);
    transform: translate3d(-10px,0,0);
  }
  
  .hovereffect:hover img {
    opacity: 0.6;
    filter: alpha(opacity=60);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
  
  .hovereffect:hover .overlay:before,
  .hovereffect:hover a, .hovereffect:hover p {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }







  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

.slider{
  max-width: 1100px;
  display: flex;
}
.slider .card{
  flex: 1;
  margin: 0 10px;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.card .content .btn button{
  background: #e74c3c;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
}
  </style>
</head>
<body>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../flat_design/images/bg1 (2).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../flat_design/images/architecture-768432.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../flat_design/images/bg1 (3).jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







<!-- start search code -->




<div class="container">
  <form class="form-inline" action="" method="POST">
   <!-- <div class="form-group ">
    <input type="text" class="form-control" id=""
     placeholder="Enter location" name="area">
   </div> -->
   <div class="form-group p-5 ml-5">
    <label for="area_id" class="mx-3" >Area Name</label>
    <select class="form-control" name="area">
     <option selected="selected" disabled>--SELECT Area
      ID--
     </option>
     <?php
     include('connection.php');
          $sql1 = "SELECT DISTINCT full_address FROM `area`";

          $result1 = $conn->query($sql1);
          while ($row1 = $result1->fetch_assoc()) {
          ?>
     <option value="<?php echo $row1['full_address']; ?>">
      <?php echo $row1['full_address']; ?></option>
     <?php
          }
          ?>
    </select>
   </div>
   <div class="form-group" style="margin-left: -25px">
    <select id="flat_type" class="form-control" name="flat_type">
     <option disabled>--select flat type--</option>
     <option>1BHK</option>
     <option>2BHK</option>
     <option>3BHK</option>
     <option>4BHK</option>
     <option>5BHK</option>
    </select>
   </div>
   <div class="form-group" style="margin-left: 20px;">
    <select id="flat_type" class="form-control" name="budget">
     <option disabled>BUDGET</option>
     <option value="3LAC">3LAC</option>
     <option value="5LAC">5LAC</option>
     <option value="8LAC">8LAC</option>
     <option value="10LAC">10LAC</option>
     <option value="15LAC">15LAC</option>
    </select>
   </div>
   <button type="submit" class="btn btn-primary"
    name="area_flat" style="margin-left: 15px;"><span><i class="fa fa-search"
      aria-hidden="true"></i></span></button>
  </form>
 </div>



 
<?php
include('connection.php');
if (isset($_POST['area_flat'])) {
  $area = $_POST['area'];
  $flat_type = $_POST['flat_type'];
  $budget = $_POST['budget'];
  $sql = "SELECT area.name,area.pincode,area.full_address,flat.flat_rate,flat.flat_img_internal,flat.flat_type,flat.sq_ft,flat.property_type,flat.id FROM area INNER JOIN flat ON area.pincode=flat.pincode WHERE area.name LIKE '%$area%' AND flat.flat_type='$flat_type' AND flat.flat_rate='$budget'";
  $result = mysqli_query($conn, $sql);
?>
<div class="container">
 <div class="row">
  <?php
      while ($record = mysqli_fetch_assoc($result)) {
      ?><div class="col-md-4 col-sm-4 py-5">
   <div class="card shadow-sm" style="height:30rem;">
    <img class="card-img-top img-fluid  "
     src="uploads/<?php echo $record['flat_img_internal']; ?>"
     alt="Card image cap" style="height: 13rem; width:24rem">
    <div class="card-body bg-light">
     <p class="card-text">Cost <span
       style="margin-left: 65px;">:</span>
      <strong><?php echo $record['flat_rate']; ?></strong>
     </p>
     <p class="card-text text-justify">Built Up Area<span
       style="margin-left: 7px;">:</span>
      <strong><?php echo $record['sq_ft']; ?></p></strong>
     <p class="card-text text-justify">Property Type<span
       style="margin-left: 5px;">:</span>
      <strong> <?php echo $record['property_type']; ?></strong></p>
     <p class="card-text text-justify">BedRoom<span
       style="margin-left: 35px;">:</span>
      <strong> <?php echo $record['flat_type']; ?></strong></p>
     <div class="d-flex justify-content-between align-items-center">

     </div>
    </div>
    <div class="card-footer pb-5 bg-white ">
     <div class=" text-center">
      <a href="view_details.php?id= <?php echo $record['id']; ?>"
       class='btn btn-warning btn-sm'>view</a>
      <!-- required bootstrap js -->
      <a href=" #" class=" btn btn-outline-dark btn-sm"
       data-toggle="modal" data-target="#send_enquiry">
       Send Enquiry
      </a>

      <div class="modal  fade" id="send_enquiry" role="dialog">
       <div class="modal-dialog modal-md">
        <div class="modal-content">
         <div class="modal-header">
          <h6 class="modal-title font-bold-normal">Send
           Enquiry</h6>
          <button type="button" class="close"
           data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
          <form action="" method="post">
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label for="client_name">Your Name</label>
              <input id="client_name" class="form-control" type="text"
               name="client_name" placeholder="abc">
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email"
               name="email" placeholder="abc@gmail.com">
             </div>
            </div>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label for="country">Country</label>
              <select id="country" class="form-control"
               name="country">
               <option value="india">India</option>
              
              </select>
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label for="mobile">Mobile</label>
              <input id="mobile" class="form-control" type="mobile"
               name="mobile" placeholder="">
             </div>
            </div>
           </div>
           <div class="form-group">
            <label for="descriptions"
             class="float-left">Description</label>
            <textarea id="descriptions" class="form-control"
             name="descriptions" rows="3"
             placeholder="I am interested in your property. Please get in contact with me."></textarea>
           </div>
           <button type="submit" name="enquiry"
            class="btn btn-outline-dark btn-sm btn-block">
            Submit
           </button>
         </div>
        </div>
       </div>
      </div>

      </form>
     </div>
    </div>
   </div>
  </div>
  <?php } ?>
 </div>
</div>

<?php } ?>
<hr>




<!-- End search code -->

</div>


<div class="container">
    <div class="row text-center">
        
  
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>
   </div>
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>

   </div>
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>
   </div>
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>
   </div>
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>
   </div>
   <div class="col-md-4 col-sm-12">
    <h2 class="mt-2">BEST SELLING</h2>
    <div class="card p-4 mx-auto d-block" style="width:22rem">
  <img class="card-img-top img-fluid" src="images/apartament-13-1399x899.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">3 BHK Flat For Sale In...</h4>
    <p class="card-text">
        2350 Sq.ft. / 3 Bedrooms / 7 Floor /<br> 3 Bathrooms</p>
    <a href="#" class="btn btn-primary">See Profile</a>
    <div class="row mt-2">
        <div class="col-md-2">
         <i class="material-icons" style="font-size:36px">add_location</i>
     
        </div>
        <div class="col-md-10">
            (Mussoorie Road, Dehradun)
        </div>
     </div>
  </div>
</div>
   </div>
   </div>

</div>








<!-- start slider coading -->
<div class="container mt-5">
  

<p class="text-center"><b>Work Flow</b></p>
<hr class="w-25">
<h2 class="text-center mb-3"><b>How it Works</b></h2>





<div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="../flat_design/images/slider3.jpg" alt=""></div>
<div class="content">
          <div class="title">
          Evaluate Property
          </div>

<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="../flat_design/images/slider 5.jpg" alt=""></div>
<div class="content">
          <div class="title">
          Meet Your Agent</div>

<p>
A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="../flat_design/images/slider2.jpg" alt=""></div>
<div class="content">
          <div class="title">
          Close the Deal</div>

<p>
A small river named Duden flows by their place and supplies it with the necessary regelialia.
</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>  
<div class="card">
        <div class="img">
<img src="../flat_design/images/slider 4.jpg" alt=""></div>
<div class="content">
          <div class="title">
          Have Your Property</div>

<p>
A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
</div>




</div>



<!-- End slider coading -->











    <h1 class="p-5" style="text-align: center;"> Our Best Properties Gallery</h1>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-4-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;">
        <div class="hovereffect">
            <img class="img-responsive" src="images/alexander-pemberton-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
    

       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;">
        <div class="hovereffect">
            <img class="img-responsive" src="images/alice-kang-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-10-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-top: 10px;">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-12-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-left: -15px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-13-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-4-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-left: 0px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartament-7-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
    
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-left: 0px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images//apartament-9-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-left:-15px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/alexander-pemberton-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;margin-left: 0px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/apartment-11-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5" style="float: left;margin-left: 0px;margin-top: 10px">
        <div class="hovereffect">
            <img class="img-responsive" src="images/alice-kang-1399x899.jpg" alt="">
                <div class="overlay">
                    <h2>New Design</h2>
                    <p>
                        <a href="#">LINK HERE</a>
                    </p>
                </div>
               
        </div>
       </div>



















       

<div class="container">
    <div class="row mt-5 mb-5">
        <h1>Services We Offer</h1>
       <div class="row">
       <div class="col-md-3 col-sm-12">
        <img class="card-img-top" src="images/apartament-13-1399x899.jpg" alt="Card image" style="width:100%">
       </div>
       <div class="col-md-3 col-sm-12">
        <h3 style="color:orange">Real Estate Agent</h3>
        Since inception, Om properties has been rendering real estate agent services to the property owners and seekers. We are based in Dehradun (Uttarakhand, India) and we render specialized solutions for buying and selling a variety of residential and...<br>
        <a href="#" class="btn btn-danger mt-2">Read</a>
       </div>
       <div class="col-md-3 col-sm-12">
        <img class="card-img-top" src="images/apartament-13-1399x899.jpg" alt="Card image" style="width:100%">
       </div>
       <div class="col-md-3">
        <h3 style="color:orange">Real Estate Agent</h3>
        Since inception, Om properties has been rendering real estate agent services to the property owners and seekers. We are based in Dehradun (Uttarakhand, India) and we render specialized solutions for buying and selling a variety of residential and...<br>
        <a href="#" class="btn btn-danger mt-2">Read</a>

       </div>
        </div>
        
    </div>
</div>
     
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;" >Testimonials</h1>
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row mt-5 mb-5">
                    
<div class="col-md-4 col-sm-12">
       <div class="card" style="width:370px">
 
  <div class="card-body">
    <i class="material-icons" style="font-size:48px;color:red">textsms</i>

    <h6 class="card-title">I contacted the agent
         and obtained the services for property 
         selling. I wan..
        </h6><br>
        <p style="color:red"">Harsh Kumar.</p>
       
  </div>
</div>
</div>
      
        <div class="col-md-4">
            <div class="card" style="width:370px">
 
                <div class="card-body">
                  <i class="material-icons" style="font-size:48px;color:red">textsms</i>
              
                  <h6 class="card-title">I contacted the agent
                       and obtained the services for property 
                       selling. I wan..
                    </h6><br>
                    <p style="color:red"">AMIT.</p>
                     
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width:370px">
 
                <div class="card-body">
                  <i class="material-icons" style="font-size:48px;color:red">textsms</i>
              
                  <h6 class="card-title">I contacted the agent
                       and obtained the services for property 
                       selling. I wan..
                      </h6><br>
                      <p style="color:red"">Mumuksha Patel.</p>
                    </div>
                </div>
              </div>
        </div>
  
  
   
   
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <h1 style="text-align: center;" >
                    Quick Enquiry</h1>
            </div>
        </div>
    </div>








<?php
include_once('connection.php');
if (isset($_POST['enquiry'])) {
  $client_name = $_POST['client_name'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $mobile = $_POST['mobile'];
  $descriptions = $_POST['descriptions'];
  $sql =
    "INSERT INTO `enquiry`(`client_name`, `email`, `country`, `mobile`, `descriptions`) VALUES ('$client_name','$email','$country','$mobile','$descriptions')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Enquiry Success')</script>";
  } else {
    echo "failed";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Enquiry</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container p-5">
      <form action="" method="post">
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label for="client_name">Your Name</label>
              <input id="client_name" class="form-control" type="text"
               name="client_name" placeholder="abc">
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email"
               name="email" placeholder="abc@gmail.com">
             </div>
            </div>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label for="country">Country</label>
              <select id="country" class="form-control"
               name="country">
               <option value="india">India</option>
               <option value="india">India</option>
               <option value="india">India</option>
               <option value="india">India</option>
               <option value="india">India</option>
              </select>
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label for="mobile">Mobile</label>
              <input id="mobile" class="form-control" type="mobile"
               name="mobile" placeholder="">
             </div>
            </div>
           </div>
           <div class="form-group">
            <label for="descriptions"
             class="float-left">Description</label>
            <textarea id="descriptions" class="form-control"
             name="descriptions" rows="3"
             placeholder="I am interested in your property. Please get in contact with me."></textarea>
           </div>
           <button type="submit" name="enquiry"
            class="btn btn-outline-dark btn-sm btn-block">
            Submit
           </button>
         </div>
        </div>
       </div>
      </div>

      </form>
      </div>
 





</div>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>
</body>
</html>

<?php
include('footer.php');
?>

