<?php

$conn=new mysqli('localhost','root','','assignment');
if(!$conn)
{
    die(mysqli_error($conn));
}
?>