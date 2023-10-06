<?php 
    include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container mt-5">
    <div class="row">
        <div class="col">
                <div class="card">
                    <div class="card-title">

                    </div>

                    <div class="card-body">
                        <table class="table">
                            <th>Sno</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Action</th>
                            <th>
                              <form action="search.php" method="Post">
                                <input type="search" name="seearch" class="p-2">
                                <button class="btn btn-primary" type="submit" name="search">Search</button>
                              </form>
                            </th>
                    

                            <?php 

                            $FetchAllData = mysqli_query($con,"SELECT * FROM registers");
                            // mysqli_num_rows
                            // var_dump($FetchAllData);
                            // print_r($FetchAllData);

                            if($isDataExists = mysqli_num_rows($FetchAllData) > 0){

                                // mysqli_fetch_array
                                //mysqli_fetch_assoc
                                $sno = 1;
                                foreach($FetchAllData as $key => $value){
                                    ?>
                                        <tr>
                                            <td><?php echo $sno; $sno++; ?></td>
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['address'] ?></td>
                                            <td>
                                                <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $value['id'] ?>">Delete</a>
                                                <a class="btn btn-success" href="update.php?update=<?php echo $value['id'] ?>">Update</a>
                                            </td>
                                        </tr>

<!--Delete Modal -->
<div class="modal fade" id="deleteModal<?php echo $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="code.php" method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <input type="hidden" name="id" value="<?php echo $value['id'] ?>">

                  <h3>Are You Want To Delete This Record ?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="delete" class="btn btn-primary">Delete</button>
            </div>
      </form>
    </div>
  </div>
</div>


<?php 

                                }




                            }else{
                                ?>
                                <tr>
                                    <th colspan='4'>Data Not Available</th>
                                </tr>

                                <?php 
                            }

                            ?>
                        </table>
                    </div>
                </div>
        </div>
    </div>
  </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>