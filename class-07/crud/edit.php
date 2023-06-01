<?php
include "db_conn.php"; 

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name']; 
    $email = $_POST['email']; 
    $gender = $_POST['gender']; 
    
    
   $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',
   `email`='$email',`gender`='$gender' WHERE id=$id";

$result = mysqli_query($conn, $sql);

if($result){
   header("Location: index.php?msg=Data Update successfully");
}
else{
    echo "Faild: " .mysqli_error($conn);
}

}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col-12"> 
 <div class="text-center">
    <h3>Edit User Information</h3>
    <p class="text-muted"> Click update after changing any information</p>
 </div>

 <?php 

    $sql = "SELECT * FROM crud WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 ?>

 <div class="col">
    <form class="row g-3" action="" method="post">
    <div class="col-6">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
  </div>
  <div class="col-6">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
  </div>
  <div class="col-12">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
  </div>
  <div class="col-12 form-group">
    <label>Gender:</label> &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="male" value="male" 
    <?php echo ($row['gender']== 'male')?"checked":"";?>>
    <label for="male" class="form-input-label">male</label>
    &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="female" value="female" 
    <?php echo ($row['gender']== 'female')?"checked":"";?> >
    <label for="female" class="form-input-label">female</label>
  </div>
  <div>
    <button type="submit" class="btn btn-success" name="submit">Update</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
  </div>
  
    </form>
 </div>

 </div> 
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>