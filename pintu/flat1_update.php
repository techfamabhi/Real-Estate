<?php
include('connection.php');
$id=$_GET['id'];
echo $id;
if (isset($_POST['edit_submit']))
{
  $flat_owner = $_POST['flat_owner'];
  $area_id = $_POST['area_id'];
  $flat_rate = $_POST['flat_rate'];
  $flat_type = $_POST['flat_type'];
  $status = $_POST['status'];
  //first image code
  $image1= $_FILES['flat_img_internal']['name'];
  $file_type = $_FILES['flat_img_internal']['type'];
  $file_size = $_FILES['flat_img_internal']['size'];
  $file_temp_loc1 =$_FILES['flat_img_internal']['tmp_name'];
  $file_store1 ="uploads/" . $image1;
  //end
  //second image code
  $image2=$_FILES['flat_img_external']['name'];
  $file_type=$_FILES['flat_img_external']['type'];
  $file_size=$_FILES['flat_img_external']['size'];
  $file_temp_loc2=$_FILES['flat_img_external']['tmp_name'];
  $file_store2="uploads/".$image2;
    //  if (!empty($_FILES['image']['name']) || !empty($_FILES['image']['name']) )
  //  {
    if(move_uploaded_file($file_temp_loc1, $file_store1)|| move_uploaded_file($file_temp_loc2, $file_store2))
    {
        $sql_update =" UPDATE `flat` SET `flat_owner`='$flat_owner',
        `area_id`='$area_id',`flat_rate`='$flat_rate',`flat_img_internal`='$image1',
        `flat_img_external`='$image2',`flat_type`='$flat_type',`status`='$status' WHERE id=$id";
     $run_update = mysqli_query($conn, $sql_update);
     if ($run_update)
  {

    echo "<script>alert('Update SuccessFull!');location.href='flat1_update.php'</script>";
  }
  else
  {
    echo "unable update data";
  }
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
  <!--  custom css link    -->
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body class="bg-light">
  <?php
  $sql = "SELECT * FROM flat WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-center text-info my-2">Edit the area details</h3>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="flat_owner">Flat Owner</label>
            <input id="flat_owners" class="form-control" type="text" name="flat_owner" value="<?php if (isset($row['flat_owner'])) {
                                                                                                echo $row['flat_owner'];
                                                                                              } ?>">
          </div>
          <div class="form-group">
            <label for="area_id">Area Id</label>
            <input id="area_id" class="form-control" type="text" name="area_id" value="<?php if (isset($row['area_id'])) {
                                                                                          echo $row['area_id'];
                                                                                        } ?>">
          </div>
          <div class="form-group">
            <label for="flat_rate">Flat Rate</label>
            <input id="flat_rate" class="form-control" type="text" name="flat_rate" value="<?php if (isset($row['flat_rate'])) {
                                                                                              echo $row['flat_rate'];
                                                                                            } ?>">
          </div>

          <div class="row">
            <div class="col-sm-3">
              <div class="form-group ">
                <label for="flat_img_internal">Select flat internal image:</label>
                <input id="flat_img_internal" class="form-control-file mb-2" type="file" name="flat_img_internal">
              </div>
            </div>
            <div class="col-sm-9">
              <?php
              echo "<td><img style='width:100px; height:70px;' src='uploads/" . $row['flat_img_internal'] . "'></td>";
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group ">
                <label for="flat_img_external">Select flat internal image:</label>
                <input id="flat_img_external" class="form-control-file mb-2" type="file" name="flat_img_external">
              </div>
            </div>
            <div class="col-sm-9">
              <?php
              echo "<td><img style='width:100px; height:70px;' src='uploads/" . $row['flat_img_external'] . "'></td>";
              ?>
            </div>
          </div>

          <div class="form-group">
            <label for="flat_type">Flat Type</label>
            <select id="flat_type" class="form-control" name="flat_type">

              <option <?php if ($row['flat_type'] == "1BHK") {
                        echo "selected";
                      } ?> value="1BHK">1BHK</option>
              <option <?php if ($row['flat_type'] == "2BHK") {
                        echo "selected";
                      } ?> value="2BHK">2BHK</option>

              <option <?php if ($row['flat_type'] == "3BHK") {
                        echo "selected";
                      } ?> value="3BHK">3BHK</option>

            </select>
          </div>
          <div class="form-group">
            <label for="status">Select one option</label>
            <select id="status" class="form-control" name="status">

              <option <?php if ($row['status'] == "active") {
                        echo "selected";
                      } ?> value="active">Active</option>
              <option <?php if ($row['status'] == "inactive") {
                        echo "selected";
                      } ?> value="inactive">InActive</option>
            </select>
          </div>
          <button type="submit" class="btn btn-outline-primary" name="edit_submit">update</button>
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