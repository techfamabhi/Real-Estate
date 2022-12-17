<?php
include('connection.php');
if(isset($_REQUEST['delete'])){
 $sql = "DELETE FROM user_details WHERE id= {$_REQUEST['id']}";

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
        <h1 align="center">User Data</h1>
      <a href="user_details.php" class="float-right btn btn btn-outline-primary mb-3">Add Data</a>

<?php
            $sql = "SELECT * FROM user_details";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
            echo '<table class="table table-bordered table-sm table-striped">';

			echo"<thead>";
			echo"<th>ID</th>";
			echo"<th>Full name</th>";
			echo"<th>Mobile</th>";
			echo"<th>email</th>";
			echo"<th>Username</th>";
      echo"<th>Password</th>";
      echo"<th>Status</th>";
      echo"<th>Adhar Number</th>";
      echo"<th>Edit</th>";
      echo"<th>Delete</th>";
      
      
      
			while($row=mysqli_fetch_assoc($result))
			{
				echo"<tr>";
                echo "<td>" . $row["id"] . "</td>";
				echo"<td>".$row['full_name']."</td>";
				echo"<td>".$row['mobile']."</td>";
				echo"<td>".$row['email']."</td>";
				echo"<td>".$row['username']."</td>";
        echo"<td>".$row['password']."</td>";
        echo"<td>".$row['status']."</td>";
        echo"<td>".$row['adhar_number']."</td>";


           
			 echo "<td>
       <a href='user_update.php?id=".$row["id"]."'  class='btn btn-warning btn-sm'>Edit</a>
       </td>";
       echo '<td><form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] . '><input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
       echo "</tr>";


        echo "</tr>";
	
				
				
			}
			
			echo"</thead>";
			echo "</table>";
			
		}
        ?>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>