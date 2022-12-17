<?php
include('connection.php');
if(isset($_REQUEST['delete'])){
 $sql = "DELETE FROM area WHERE id= {$_REQUEST['id']}";

 if (mysqli_query($conn, $sql)) {
     echo "Record deleted successfully";
 } else {
     echo "Error deleting record: " . mysqli_error($conn);
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
  <body>
      <div class="container">
       <div class="row">
        <div class="col-sm-12 mt-3">
            <h1 class="text-center text-info">Area Detail Information</h1>
            <a href="area.php" class="float-right btn btn btn-outline-primary mb-3">Add Data</a>
        <?php
            $sql = "SELECT * FROM area";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result)>0)
          {
            echo '<table class="table table-bordered table-sm table-striped">';
              echo "<thead class='thead-dark'>";
                echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Area Name</th>";
                  echo "<th>Pincode</th>";
                  echo "<th>Full Address</th>";
                  echo "<th>Status</th>";
                  echo "<th>Edit</th>";
                  echo "<th>Delete</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>" .$row["id"] ."</td>";
                  echo "<td>" .$row["name"] ."</td>";
                  echo "<td>" .$row["pin"]."</td>";
                  echo "<td>" .$row["full_address"]."</td>";
                  echo "<td>" .$row["status"]."</td>";
                  echo "<td>
                  <a href='area_update.php?id=".$row["id"]."'class='btn btn-warning btn-sm'>Edit</a>
                  </td>";
                  echo '<td><form action="" method="POST"><input type="hidden" name="id" value='. $row["id"] . '><input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
                  echo "</tr>";
                }
              } else
              {
                echo "0 Results";
          }
          ?>
   
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