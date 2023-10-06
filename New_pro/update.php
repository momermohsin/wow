<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 

<?php 
include 'connection.php';
if(isset($_GET['update'])){
    $id = $_GET['update'];

    $FetchAllData = mysqli_query($con,"SELECT *FROM registers WHERE id = '$id'");
    $Data = mysqli_fetch_assoc($FetchAllData);

    ?>
        <div class="container m-5 shadow">
            <div class="row">
                <div class="col">
                    <h1>Update User Data</h1>
                    <form action="code.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $Data['id'] ?>">    
                        <input class="form-control mb-3" type="text" name="name" placeholder="Enter Your Name" value="<?php echo $Data['name'] ?>">
                        <input class="form-control mb-3" type="text" name="address" placeholder="Enter Your Address" value="<?php echo $Data['address'] ?>">

                        <input class="btn btn-success" type="submit" name="update" value="Update">
                        <!-- <button class="btn btn-success" type="submit" name="update">Update</button> -->
                    </form>
                </div>
            </div>
        </div>
    <?php 
}
?>



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>