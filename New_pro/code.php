<?php 
include "connection.php";

if(isset($_POST['delete'])){

    $delete = mysqli_query($con,"DELETE FROM registers WHERE id = '".$_POST['id']."'");

    if($delete){
        ?>
        <script>
            alert('Data Deleted Successfully')
            location.assign('index.php')
        </script>
        <?php 
    }else{
        ?>
        <script>
            alert('Data Not Deleted')
            location.assign('index.php')
        </script>
        <?php 
    }

}


// Update

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Update Query

    $update = mysqli_query($con,"Update registers SET name= '$name',address='$address' WHERE id = '$id'");

    if($update){
        ?>
        <script>
            alert('Data Updated Successfully')
            location.assign('index.php')
        </script>
        <?php 
    }else{
        ?>
        <script>
            alert('Data Not Updated')
            location.assign('index.php')
        </script>
        <?php 
    }

}

?>