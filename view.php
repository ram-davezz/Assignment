<?php
include 'connect.php';
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <div class="container-fluid my-5">
 
 <form class="container"><?php
 // include('include/sidebar.php');
 ?>
   <button class="btn btn-primary"><a href="insert.php" class="text-light">Add Person</a></button>
   <table class="table table-hover my-5">
<thead>
<tr>
 <th scope="col">Sl.No</th>
 <th scope="col">NAME</th>
 <th scope="col">AGE</th>
 <th scope="col">USR_TYPE</th>
 <th scope="col">PH.NO</th>
 <th scope="col">GENDER</th>
 <th scope="col">CITY</th>
</tr>
</thead>
<tbody>

<?php
$sql="SELECT * FROM `register`";
$res=mysqli_query($conn,$sql);
if($res)
{ 
//   echo"success";
//   $row=mysqli_fetch_assoc($res);
//   echo $row['name'];
 while($row=mysqli_fetch_assoc($res)){
     $id=$row["id"];
   //   echo $id;
   //   exit;
     $name=$row["name"];
     $age=$row["age"];
     $usr=$row["user_type"];     
     $mobile=$row["mobile"];
     $gender=$row["gender"];
     $city=$row["city"];
     echo'<tr>
     <th scope="row">'.$id.'</th> 
     <td>'.$name.'</td>
     <td>'.$age.'</td>
     <td>'.$usr.'</td>
     <td>'.$mobile.'</td>
     <td>'.$gender.'</td>
     <td>'.$city.'</td>
     <td> 
     <button type="submit"class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button> 
     <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
 
     
     </td>
   </tr>';

 }
}
?>

</tbody>
</table>
</form>
</div>
</div>
<?php
include('include/footer.php');
?>