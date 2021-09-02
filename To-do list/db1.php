<?php
// if ($_SERVER["REQUEST_METHOD"] == 'POST') {
if(isset($_POST['submit'])){

    $title = $_POST['title'];
    
    include "database.php";
    
    $sql = "insert into todo(topic) values ('$title')";
    $check = mysqli_query($con, $sql);
    if ($check) {
        header("location: ./index.php");
    } else {
        echo mysqli_connect_error();
    }
}
?>