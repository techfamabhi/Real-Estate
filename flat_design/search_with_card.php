<?php
include('connection.php');
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $sql="SELECT area.name,area.pin,area.full_address,flat.flat_owner,flat.flat_rate,flat.flat_img_internal,flat.flat_img_external,flat.flat_type FROM area INNER JOIN flat ON area.id=flat.id where area.name='$valueToSearch'";
     $result= mysqli_query($conn, $sql);
     $total = mysqli_num_rows($result);//Display How Many Rows in Database
     if(mysqli_num_rows($result)>0)
     {
         ?>
         <div class="container">
             
         <?php
           while($row = mysqli_fetch_assoc($result)){


?>
 <div class="col-sm-3 py-5">
     <div class="card shadow-sm" style="height: 320px;">
      <img class="card-img-top img-thumbnail " src="uploads/<?php echo $row['flat_img_internal']; ?>" alt="Card image cap">
     <div class="card-body">
      <h5 class="card-title"><?php echo $row['name']; ?></h5>
      <p class="card-text text-justify"><?php echo $row['flat_type'];?></p>
      <div class="d-flex justify-content-between align-items-center">
      <a href="request_product.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Enquiry</a>
      </div>
     </div>
    </div>
   </div>
   <?php          
           }
        }
    }
    
             ?>
         </div>

<!doctype html>
<html lang="en">
  <head>
    <title>flat search</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <form method="POST" action="">
          <div class="form-group">
            <label for="">search</label>
            <input type="text" name="valueToSearch" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <button type="submit" class="btn btn-primary" name="search">search</button>
      
          </form>
         </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>