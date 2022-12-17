
<?php
include('header.php');
?>


<?php
include_once('connection.php');
$id = $_GET['id'];
echo $id;
?>
<!doctype html>
<html lang="en">

<head>
 <title>Title</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- font awesome link -->
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
</head>

<body>
 <?php
  $sql = "SELECT * FROM agent WHERE a_id1='$id'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
 <div class="container">
  <h5 class="text-muted">
   <?php echo $row['name']; ?>
   <hr>
  </h5>
  <div class="row p-5">
   <div class="col-md-6 col-sm-12">
    <div class="media">
     <a class="d-flex" href="#">
      <img class=" img-thumbnail "
       src="uploads/<?php echo $row['a_image']; ?>" alt=""
       style="height:11rem;width:13rem;">
     </a>
     <div class="media-body ml-3 ">
      <h5 class="card-title"></h5><span class="text-muted  ">Contact
       Info</span>
      </h5>
      <p>
      </p>
      <p class="mt-0"><strong>Mobile</strong><span
        style="margin-left: 53px;">:</span>
       <?php echo $row['mobile']; ?>
       <br>
       <strong>Email</strong><span style="margin-left: 65px;">:</span>
       <?php echo $row['email']; ?>
       <strong><br>Skype</strong><span style="margin-left: 56px;">
        : pintu.birajdar</span>
      </p>
      <h5 class="text-muted pt-5 font-weight-normal">Agency</h5>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-sm-12">
    <h5 class="text-muted">Shortly About Me</h5>
    <p class="text-justify">Lorem ipsum dolor sit amet consectetur
     adipisicing elit. Minima
     aut, nesciunt officiis dolore possimus cupiditate, architecto
     iure id vero ducimus a quisquam accusamus accusantium, facilis
     perspiciatis autem excepturi quaerat voluptatem.</p>
    <h5 class="text-muted font-weight-normal">My Social Profiles</h5>
    <button type="button" class="btn btn-dark"><span><i
       class="fa fa-facebook" aria-hidden="true"></i></span></button>
    <button type="button" class="btn btn-dark"><span><i
       class="fa fa-twitter" aria-hidden="true"></i></span></button>
    <button type="button" class="btn btn-dark"><span><i
       class="fa fa-linkedin" aria-hidden="true"></i></span></button>
   </div>
  </div>
  <hr>
  <?php }
  $sql2 = "SELECT count(*) FROM flat WHERE a_id=$id";
  $result2 = mysqli_query($conn, $sql2);
  foreach ($result2 as $row2)
    echo "<tr>";

  echo "</tr>";


    ?>
  <h5 class="text-muted">My
   Properties(<?php echo "<td>" . $row2['count(*)'] . "</td>";  ?>)
  </h5>

  <?php
    $sql = "SELECT flat.flat_rate,flat.sq_ft,flat.flat_img_internal,flat.property_type,flat.flat_type,flat.id FROM flat INNER JOIN agent ON flat.a_id=agent.a_id1 WHERE a_id1=$id ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    ?>
  <div class="container">
   <div class="row">
    <?php
        while ($record = mysqli_fetch_assoc($resultset)) {
        ?> <div class="col-md-4 col-sm-4 py-5">
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
                <input id="client_name" class="form-control"
                 type="text" name="client_name" placeholder="abc">
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
 </div>



 
 <?php
 include('footer.php');
 ?>
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