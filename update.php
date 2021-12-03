<?php
include "connect.php";
$id=$_GET['updateid'];
$sql="SELECT * FROM `register` WHERE id=$id";
// echo $sql;
// exit;
$res=mysqli_query($conn,$sql);
// echo $result;
// exit;
$row=mysqli_fetch_assoc($res);
$name=$row["name"];
$age=$row["age"];
$usr=$row["user_type"];     
$mobile=$row["mobile"];
$gender=$row["gender"];
$city=$row["city"];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $usr=$_POST["usr"];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    
    $sql="UPDATE `register` SET `name`='$name',`age`='$age',`user_type`='$usr',`mobile`='$mobile',`gender`='$gender',`city`='$city' where id=$id";
    // echo $sql;
    // exit;
    $res=mysqli_query($conn,$sql);
    if($res)
    {
    //   echo'Inserted Successfull';
        header('location:view.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>UPDATION</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">  
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name"value="<?php echo $name;?>">
  </div>

  <div class="mb-3">
    <label for="age" class="form-label">Age:</label>
    <input type="number" class="form-control" name="age"value="<?php echo $age;?>">
  </div>

  <div class="mb-3">
    <label for="usr" class="form-label">Usr_type:</label>
    <label>
          <input type="radio" name="usr"value="salesperson">
            Salesperson
          </label>
          <label>
          <input type="radio" name="usr"value="customer">
             Customer
          </label>

  </div>

  <div class="mb-3">
    <label for="mobile" class="form-label">Number:</label>
    <input type="number" class="form-control" name="mobile"value="<?php echo $mobile;?>">
  </div>

  <div class="mb-3">
    <label for="gender" class="form-label">Gender:</label>
    <label>
          <input type="radio" name="gender"value="Male">
             Male
          </label>
          <label>
          <input type="radio" name="gender"value="Female">
             Female
          </label>

  </div>
  
  <div class="mb-3">
    <label for="city" class="form-label">City:</label>
    <input type="" class="form-control"name="city"value="<?php echo $city;?>">
  </div>
    
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 
  </body>
</html>