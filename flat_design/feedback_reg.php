<?php
include('connection.php');

 if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $remark=$_POST['remark'];
    $date=$_POST['date'];

  $sql2="INSERT INTO feedback_details(`name`, `email`, `phone`, `remark`, `date`) 
  VALUES('$name','$email','$phone','$remark','$date')";
  $ra=mysqli_query($conn,$sql2);
if($ra)
{ 
echo "Record Inserted";
header('location:feedback_display.php');
}
else
{
  echo "\nRecord not inserted";
}
} 

	?>
  
<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <title>User Details</title>
</head>

<body>

 <div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-sm-12">

      <div class="m-auto" style="width: 50%;">
        <h1>Feedback</h1>
        <form method="post" action="">

          <div class="form-group">
            <label>Enter Name:</label>
            <input id="name" class="form-control" type="text" name="name" placeholder="Full Name" required>
          </div>
          <div class="form-group">
           <label>Enter Email ID:</label>
           <input id="Email" class="form-control" type="email" name="email" placeholder="Email" required>
         </div>
          <div class="form-group">
           <label>Enter Phone Number:</label>
           <input id="phone" class="form-control" type="text" name="phone" placeholder="Phone" required>
         </div>
        
         <div class="form-group">
           <label>Enter Remark</label>
           <input id="username" class="form-control" type="text" name="remark" placeholder="Enter Remark" required>
         </div>

         <div class="form-group">
           <label>Enter Date</label>
           <input id="date" class="form-control" type="date" name="date" placeholder="Enter date" required>
         </div>

         <input type="submit" name="submit" value="submit" class="btn btn-primary">

       </form>
     </div>
   </div>
 </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>