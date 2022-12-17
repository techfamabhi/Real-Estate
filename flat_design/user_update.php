<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
if(isset($_POST['edit_submit']))
{
    
    $fullname=$_POST['fullname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $adhar_number=$_POST['adhar_number'];
    $status=$_POST['status'];


 $sql="UPDATE `user_details` SET `full_name`='$fullname',`mobile`='$mobile',`email`='$email',`username`='$username',`password`='$password',`status`='$status',`adhar_number`='$adhar_number' WHERE id=$id";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
echo "data updated successfully";
header('location:display_user.php');

 }
 else{
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
  </head>
  <body class="bg-light">
  <?php
   $sql="SELECT * FROM user_details WHERE id='$id'";
   $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
  ?>
     <div class="container">
      <div class="row">
       <div class="col-sm-12">
       <h3 class="text-center text-info">Edit the area details</h3>
          <form action="" method="post">
          <div class="form-group">
            <label for="name">fullName </label>
            <input id="name" class="form-control" type="text" name="fullname" value="<?php if(isset($row['full_name'])){ echo $row['full_name'];} ?>">
           </div>
           <div class="form-group">
            <label for="pin">Mobile</label>
            <input id="pin" class="form-control" type="text" name="mobile" value="<?php if(isset($row['mobile'])){ echo $row['mobile'];} ?>">
           </div>
           <div class="form-group">
            <label for="full_address">email</label>
            <input id="full_address" class="form-control" type="text" name="email" value="<?php if(isset($row['email'])){ echo $row['email'];} ?>">
           </div>
           <div class="form-group">
            <label for="full_address">username</label>
            <input id="full_address" class="form-control" type="text" name="username" value="<?php if(isset($row['username'])){ echo $row['username'];} ?>">
           </div>
           <div class="form-group">
            <label for="full_address">password</label>
            <input id="full_address" class="form-control" type="password" name="password" value="<?php if(isset($row['password'])){ echo $row['password'];} ?>">
           </div>

           <div class="form-group">
            <label for="status">Select one option</label>
            <select id="status" class="form-control" name="status">

            <option  <?php if ($row['status'] == "active") {
                                                                            echo "selected";
                                                                          } ?> value="active">Active</option>
 <option  <?php if ($row['status'] == "inactive") {
                                                                            echo "selected";
                                                                          } ?> value="inactive">InActive</option>             </select>
           </div>

           <div class="form-group">
            <label for="full_address">adhar_number</label>
            <input id="full_address" class="form-control" type="text" name="adhar_number" value="<?php if(isset($row['adhar_number'])){ echo $row['adhar_number'];} ?>">
           </div>
           
           <button type="submit" class="btn btn-outline-primary" name="edit_submit">Submit</button>
          </form>
       </div>
      </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>