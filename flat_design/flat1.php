<?php
session_start();
if(isset( $_SESSION['email']))
{

}
else
{
  header('location:login_dashboard.php');
}
?>

<?php
include('dashboard.php');
?>



<?php
include('connection.php');
if (isset($_POST['flat_submit'])) {
  $a_id1 = $_POST['a_id1'];
  $flat_owner = $_POST['flat_owner'];
  $pincode = $_POST['pincode'];
  $flat_rate = $_POST['flat_rate'];
  $sq_ft = $_POST['sq_ft'];
  $property_type = $_POST['property_type'];
  $flat_type = $_POST['flat_type'];
  //first image code
  $image1 = $_FILES['flat_internal_img']['name'];
  $file_type = $_FILES['flat_internal_img']['type'];
  $file_size = $_FILES['flat_internal_img']['size'];
  $file_temp_loc1 = $_FILES['flat_internal_img']['tmp_name'];
  $file_store1 = "uploads/" . $image1;
  //end
  if (move_uploaded_file($file_temp_loc1, $file_store1)) {
    $sql = "INSERT INTO `flat`(`a_id`, `flat_owner`, `pincode`, `flat_rate`, `sq_ft`, `property_type`,`flat_img_internal`,`flat_type`) VALUES ('$a_id1','$flat_owner','$pincode','$flat_rate','$sq_ft','$property_type','$image1','$flat_type')";
      // $run_update = mysqli_query($conn, $sql_update);

    if (mysqli_query($conn, $sql)) {
     
        echo "<script>alert('Data Inserted Successfully ')</script>";
        echo "<script> window.location.href = 'flat1_fetch.php'
        </script>";
        } else {
        echo "Data Cannot Added";
      }
      //header('location:flat1_fetch.php');
    } else {
      echo "failed";
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>flat1</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
 </script>
 <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
 </script>
</head>

<body>
 <div class="container my-5">
  <div class="row">
   <div class="col-sm-4 mx-auto d-block bg-light">
    <h3 class="text-center text-info">Flat Details</h3>
    <form action="" method="post" enctype="multipart/form-data">
     <div class="form-group">
      <label for="a_id">Agent id</label>
      <select id="a_id1" class="form-control" name="a_id1">
       <option disabled selected>Please Select one
       </option>
       <?php
              $sql = "SELECT * FROM agent";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
       <option value="<?php echo $row['a_id1']; ?>">
        <?php echo $row['a_id1']; ?></option>
       <?php
              }
              ?>
      </select>
     </div>
     <div class="form-group">
      <label for="flat_owner">Flat Owner(Agent)</label>
      <input id="flat_owners" class="form-control" type="text"
       name="flat_owner">
     </div>

     <div class="form-group">
      <label for="facaulty_name">Area id</label>
      <select id="pincode" class="form-control" name="pincode">
       <option disabled selected>Please Select Area
       </option>
       <?php
              $sql = "SELECT * FROM area";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
       <option value="<?php echo $row['pincode'] ?>">
        <?php echo $row['pincode'] ?></option>
       <?php
              }
              ?>
      </select>
     </div>
     <div class="form-group">
      <label for="flat_rate">Flat Rate</label>
      <input id="flat_rate" class="form-control" type="text"
       name="flat_rate">
     </div>
     <div class="form-group">
      <label for="flat_rate">Sq.ft</label>
      <input id="flat_rate" class="form-control" type="text"
       name="sq_ft">
     </div>
     <div class="form-group">
      <label for="property_type">Property Type</label>
      <select id="property_type" class="form-control"
       name="property_type">
       <option disabled selected> Select propery type
       </option>
       <option value="Flats & Apartments">Flats & Apartments
       </option>
       <option value=" Residential Plot"> Residential Plot
       </option>
       <option value="Builder Floor">Builder Floor</option>
       <option value="Individual Houses/Villas">Individual
        Houses/Villas</option>
      </select>
     </div>
     <p>Select flat internal image:</p>
     <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile"
       name="flat_internal_img">
      <label class="custom-file-label" for="customFile">Choose
       file</label>
     </div>
     <!-- <p>Select flat external image:</p> -->
     <!-- <div class="custom-file mb-3">
      <input type="file" class="custom-file-input"
       id="customFile" name="flat_external_img">
      <label class="custom-file-label"
       for="customFile">Choose file</label>
     </div> -->
     <div class="form-group">
      <label for="flat_type">Flat Type</label>
      <select id="flat_type" class="form-control" name="flat_type">
       <option value="1BHK">1BHK</option>
       <option value="2BHK">2BHK</option>
       <option value="3BHK">3BHK</option>
       <option value="3BHK">4BHK</option>
       <option value="3BHK">5BHK</option>
      </select>
     </div>
     <div class="mt-3">
      <button type="submit" class="btn btn-primary"
       name="flat_submit">Submit</button>
     </div>
    </form>
   </div>
  </div>
 </div>
 <script>
 // Add the following code if you want the name of the file appear on select
 $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass(
   "selected").html(fileName);
 });
 </script>
</body>

</html>