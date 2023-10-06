<?php
include("connection.php");
   

if(isset($_POST['search'])){

    $data = $_POST['seearch'];

    $fetchData = mysqli_query($con,"SELECT * FROM registers WHERE id like '%$data%' OR name like '%$data%'");

    if($dataExists = mysqli_num_rows($fetchData)){

        
        
    }else{
        ?>
        <script>
            alert('Data Not Available')
            location.assign('index.php')
        </script>
        <?php 
    }
}


?>