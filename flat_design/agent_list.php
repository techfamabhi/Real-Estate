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


<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
 <title>agent_listing</title>
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
 <?php
  $sql = "SELECT * FROM agent";
  $result = mysqli_query($conn, $sql);
  ?>
 <div class="container">
  <h4 class="font-weight-normal p-5">Agents Listing
   <hr>
  </h4>
  <div class="row">
   <?php
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['a_id1'];

      ?>
   <div class="col-md-6 col-sm-12 mb-5">
    <div class="media">
     <a class="d-flex" href="#">
      <img class=" img-thumbnail "
       src="uploads/<?php echo $row['a_image']; ?>" alt=""
       style="height:9rem;width:9rem;">
     </a>
     <div class="media-body ml-3 ">





      <h5 class="card-title"><a style="text-decoration: none;"
        href="property_detail.php?id= <?php echo $row['a_id1']; ?>"><?php echo $row['name']; ?></a><br><span
        class="text-muted small ">

        <?php
                  $sql2 = "SELECT count(*) FROM flat WHERE a_id=$id";
                  $result2 = mysqli_query($conn, $sql2);
                  foreach ($result2 as $row2)
                    echo "<tr>";
                  echo "<td>" . $row2['count(*)'] . "</td>";
                  echo "</tr>";
                  ?>
        Properties</span>


      </h5>
      <p>
      </p>

      <p class="mt-0"><strong>Mobile</strong><span
        style="margin-left: 53px;">:</span>
       <?php echo $row['mobile']; ?>
       <br>
       <strong>Email</strong><span style="margin-left: 65px;">:</span>
       <?php echo $row['email']; ?>
      </p>


     </div>
    </div>
   </div>
   <?php
      } ?>
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