<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `info` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:display.php');
        // echo "Deleted successfully";
    }else{
        die(mysqli_error($conn));
    }
}
?>