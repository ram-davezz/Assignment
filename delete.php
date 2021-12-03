<?php

include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `register` WHERE id=$id";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
    //    echo"deleted";
    header('location:view.php');
   }else
   {
      die(mysqli_error($conn));
   }
}


?>