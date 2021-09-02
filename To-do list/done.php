<?php

include "database.php";

// $id=$_GET['sno'];

$sql = "delete from todo where sno=$id";

$delete=mysqli_query($con,$sql);
if($delete){
    header("location:./index.php");
}

?>