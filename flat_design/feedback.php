<?php
include('connection.php');

?>
<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <title>Feedback Details</title>
</head>

<body>

 <div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-sm-12">

      <div class="m-auto" style="width: 50%;">
        <h1>Feedback Form</h1>
        <form method="post" action="">

          <div class="form-group">
            <label>Enter Full Name:</label>
            <input id="name" class="form-control" type="text" name="fullname" placeholder="Full Name" required>
          </div>
          <div class="form-group">
           <label>Enter Email ID:</label>
           <input id="Email" class="form-control" type="email" name="email" placeholder="Email" required>
         </div>
         <div class="form-group">
           <label>Enter Mobile Number:</label>
           <input id="phone" class="form-control" type="text" name="mobile" placeholder="Phone" required>
         </div>
         
         <div class="form-group">
           <label>Enter Username:</label>
           <input id="username" class="form-control" type="text" name="username" placeholder="Enter Username" required>
         </div>

         <div class="form-group">
           <label>Enter Password:</label>
           <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password" required>
         </div>

         

         <div class="form-group">
           <label>Enter Aadhar Number:</label>
           <input id="Aadhar" class="form-control" type="text" name="Aadhar" placeholder="Enter Aadhar Number" required>
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