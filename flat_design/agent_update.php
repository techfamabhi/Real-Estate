<?php
include('connection.php');
$agent_id = $_GET['id'];
echo $agent_id;
if (isset($_POST['agent_update'])) {
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 //image update code
 $image = $_FILES['a_image']['name'];
 $file_type = $_FILES['a_image']['type'];
 $file_size = $_FILES['a_image']['size'];
 $file_temp_loc1 = $_FILES['a_image']['tmp_name'];
 $file_store1 = "uploads/" . $image;
 if (!empty($_FILES['a_image']['name'])) //both image not empty but updated
 { //not empty
  if (move_uploaded_file($file_temp_loc1, $file_store1)) {
   $sql_update = "UPDATE `agent` SET `name`='$name',`mobile`='$mobile',`email`='$email',`a_image`='$image'
     WHERE a_id1=$agent_id
     ";
  }
 } else // no image updated
 {
  $sql_update = "UPDATE `agent` SET `name`='$name',`mobile`='$mobile',`email`='$email'
  WHERE a_id1=$agent_id";
 }
 $run_update = mysqli_query($conn, $sql_update);
 if ($run_update) {
  echo "Data Updated ";
  header('location:agent_fetch.php');
 } else {
  echo "unable update data";
 }
}



?>
<!doctype html>
<html lang="en">

<head>
 <title>area</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-sm-8 mx-auto d-block bg-light">
    <?php
    $sql = "SELECT * FROM agent WHERE a_id1='$agent_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <h3 class="text-center text-info my-2">Edit the area
        details</h3>
       <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
         <label for="name">Name of Agent</label>
         <input id="name" class="form-control" type="text" name="name"
          value="<?php if (isset($row['name'])) {
                                                                               echo $row['name'];
                                                                              } ?>">
        </div>
        <div class="form-group">
         <label for="mobile">Mobile</label>
         <input id="mobile" class="form-control" type="text"
          name="mobile"
          value="<?php if (isset($row['mobile'])) {
                                                                                   echo $row['mobile'];
                                                                                  } ?>">
        </div>
        <div class="form-group">
         <label for="email">Email</label>
         <input id="email" class="form-control" type="text"
          name="email"
          value="<?php if (isset($row['email'])) {
                                                                                 echo $row['email'];
                                                                                } ?>">
        </div>
        <div class="row">
         <div class="col-sm-4">
          <div class="form-group ">
           <label for="flat_img_internal">Select
            image:</label>
           <input id="image" class="form-control-file mb-2"
            type="file" name="a_image">
          </div>
         </div>
         <div class="col-sm-8">
          <?php
          echo "<td><img style='width:100px; height:70px;' src='uploads/" . $row['a_image'] . "'></td>";
          ?>
         </div>
        </div>
        <button type="submit" class="btn btn-outline-primary"
         name="agent_update">Submit</button>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
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