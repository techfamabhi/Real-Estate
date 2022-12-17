
<?php
include('header.php');
?>



 <div class="container p-5">
  <form class="form-inline" action="" method="POST">
   <div class="form-group ">
    <input type="text" class="form-control" id=""
     placeholder="Enter location" name="area">
   </div>
   <div class="form-group">
    <select id="flat_type" class="form-control" name="flat_type">
     <option disabled>--select flat type--</option>
     <option>1BHK</option>
     <option>2BHK</option>
     <option>3BHK</option>
     <option>4BHK</option>
     <option>5BHK</option>
    </select>
   </div>
   <div class="form-group">
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
    name="area_flat"><span><i class="fa fa-search"
      aria-hidden="true"></i></span></button>
  </form>
 </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
 <script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
</body>

</html>
<?php
include('connection.php');
if (isset($_POST['area_flat'])) {
  $area = $_POST['area'];
  $flat_type = $_POST['flat_type'];
  $budget = $_POST['budget'];
  $sql = "SELECT area.name,area.pincode,area.full_address,flat.flat_rate,flat.flat_img_internal,flat.flat_img_external,flat.flat_type,flat.sq_ft,flat.property_type,flat.id FROM area INNER JOIN flat ON area.pincode=flat.pincode WHERE area.name LIKE '%$area%' AND flat.flat_type='$flat_type' AND flat.flat_rate='$budget'";
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
   </div>
  </div>
  <?php } ?>
 </div>
</div>

<?php } ?>









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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>flat_card</title>
</head>

<body>
  <?php
  $sql = "SELECT
area.name,area.pincode,area.full_address,flat.flat_rate,flat.sq_ft,flat.flat_img_internal,flat.property_type,flat.flat_img_external,flat.flat_type,flat.id
FROM area INNER JOIN flat ON area.pincode=flat.pincode";
  $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
  ?>
  <div class="container">
    <div class="row">
      <?php
      while ($record = mysqli_fetch_assoc($resultset)) {
      ?> <div class="col-md-4 col-sm-4 py-5">
          <div class="card shadow-sm" style="height:30rem;">
            <img class="card-img-top img-fluid  " src="uploads/<?php echo $record['flat_img_internal']; ?>" alt="Card image cap" style="height: 13rem; width:24rem">
            <div class="card-body bg-light">
              <p class="card-text">Cost <span style="margin-left: 65px;">:</span>
                <strong><?php echo $record['flat_rate']; ?></strong>
              </p>
              <p class="card-text text-justify">Built Up Area<span style="margin-left: 7px;">:</span>
                <strong><?php echo $record['sq_ft']; ?></p></strong>
              <p class="card-text text-justify">Property Type<span style="margin-left: 5px;">:</span>
                <strong> <?php echo $record['property_type']; ?></strong></p>
              <p class="card-text text-justify">BedRoom<span style="margin-left: 35px;">:</span>
                <strong> <?php echo $record['flat_type']; ?></strong></p>
              <div class="d-flex justify-content-between align-items-center">

              </div>
            </div>
            <div class="card-footer pb-5 bg-white ">
              <div class=" text-center">
                <a href="view_details.php?id= <?php echo $record['id']; ?>" class='btn btn-warning btn-sm'>view</a>
                <!-- required bootstrap js -->
                <a href=" #" class=" btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#send_enquiry">
                  Send Enquiry
                </a>

                <div class="modal  fade" id="send_enquiry" role="dialog">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title font-bold-normal">Send
                          Enquiry</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="post">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="client_name">Your Name</label>
                                <input id="client_name" class="form-control" type="text" name="client_name" placeholder="abc">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="abc@gmail.com">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country">
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
                                <input id="mobile" class="form-control" type="mobile" name="mobile" placeholder="">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="descriptions" class="float-left">Description</label>
                            <textarea id="descriptions" class="form-control" name="descriptions" rows="3" placeholder="I am interested in your property. Please get in contact with me."></textarea>
                          </div>
                          <button type="submit" name="enquiry" class="btn btn-outline-dark btn-sm btn-block">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
</body>

</html>

<?php
include('footer.php');
?>
