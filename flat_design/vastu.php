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


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <div class="row p-2">
          <div class="col-md-6">
              <p>Those who are seeking professional support for making property structures vastu compliant can avail our vastu consultancy services. At Om properties, we are a group of vastu consultants, who work collectively to render specialized solutions adhering to the codes of vastu shastra. The agency is headquartered in Dehradun (Uttarakhand, India) and our services are available for old and new residential & commercial property structures. We operate with a network of residential vastu advisors, and vastu consultants having in-depth knowledge of vastu thus, top-notch solutions are assured. One can reach us through our contact us page for scheduling a property visit.
                </p>
          </div>
          <div class="col-md-6">
            <img class="card-img-top" src="images/apartament-4-1399x899.jpg" alt="Card image" style="width:100%">

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



  <div class="container" style="background-color: lightgray;padding: 30px;margin-top: 80px;">
      
      <h3 style="background-color: 	#708090;color: white;padding: 10px;left:0px;">Enquiry Details</h3>

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
  
</body>


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
