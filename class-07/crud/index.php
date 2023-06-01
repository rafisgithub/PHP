<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
  </head>
  <body>
    <div class="container">
    <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            
            '.$msg.'
           
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>';
        }
        ?>
    <div class="row">
    <div class="col-12"> 
 <div class="text-center">
    <h3>User List</h3>
    <p class="text-muted"> All User list the blowe</p>
 </div>
 <a href="http://localhost/4axizIT/class-07/crud/add_new.php" type="button" class="btn btn-info m-3 float-end">Add New</a>
 <table class="table table-striped table-border">
  <tr class="bg-info">
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>
<?php
include "db_conn.php";

$sql = "SELECT * FROM crud";
$result = mysqli_query($conn,$sql);
//print_r($result);exit;
while ($row = mysqli_fetch_assoc($result)){
  
  ?>

  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['first_name']?></td>
    <td><?php echo $row['last_name']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['gender']?></td>
    <td>
    <a href="index.php" type="button" class="btn btn-info">View</a>
    <a href="edit.php?id=<?php echo $row['id']?>" type="button" class="btn btn-info">Edit</a>
    <a href="delete.php?id=<?php echo $row['id']?>" type="button" class="btn btn-info">Delete</a>
</td>
  </tr>
  <?php } ?>
  
</table>

 </div> 
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>