<?php
include('connection.php');
if(isset($_POST['flat_submit']))
{

    $flat_owner = $_POST['flat_owner'];
    $area_id = $_POST['area_id'];
    $flat_rate = $_POST['flat_rate'];
    $flat_type = $_POST['flat_type'];
    //first image code
    $image1= $_FILES['flat_internal_img']['name'];
    $file_type = $_FILES['flat_internal_img']['type'];
    $file_size = $_FILES['flat_internal_img']['size'];
    $file_temp_loc1 = $_FILES['flat_internal_img']['tmp_name'];
    $file_store1 = "uploads/" . $image1;
    //end
    //second image code
    $image2 = $_FILES['flat_external_img']['name'];
    $file_type = $_FILES['flat_external_img']['type'];
    $file_size = $_FILES['flat_external_img']['size'];
    $file_temp_loc2 = $_FILES['flat_external_img']['tmp_name'];
    $file_store2 = "uploads/" . $image2;
    //end
    if(move_uploaded_file($file_temp_loc1,$file_store1)||move_uploaded_file($file_temp_loc2,$file_store2));
 {
$sql="INSERT INTO `flat`(`flat_owner`, `area_id`, `flat_rate`, `flat_img_internal`,`flat_img_external`,`flat_type`)
VALUES ('$flat_owner','$area_id','$flat_rate','$image1','$image2','$flat_type')";
if(mysqli_query($conn,$sql))
{
 echo "file inserted successfully";
 header('location:flat1_fetch.php');
}
else
{
 echo"failed";
}
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h3 class="text-center text-info">Flat Details</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="flat_owner">Flat Owner</label>
                <input id="flat_owners" class="form-control" type="text" name="flat_owner">
            </div>
            <div class="form-group">
                <label for="area_id">Area Id</label>
                <input id="area_id" class="form-control" type="text" name="area_id">
            </div>
            <div class="form-group">
                <label for="flat_rate">Flat Rate</label>
                <input id="flat_rate" class="form-control" type="text" name="flat_rate">
            </div>
            <p>Select flat internal image:</p>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="flat_internal_img">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <p>Select flat external image:</p>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="flat_external_img">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="form-group">
                <label for="flat_type">Flat Type</label>
                <select id="flat_type" class="form-control" name="flat_type">
               <option value="1BHK">1BHK</option>
               <option value="2BHK">2BHK</option>
               <option value="3BHK">3BHK</option>
             </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-success" name="flat_submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>