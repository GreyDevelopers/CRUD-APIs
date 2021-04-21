<?php
include 'db.php';

$id = $_POST['id'];

$query = "DELETE FROM `users` WHERE id=$id";

$result = mysqli_query($connection,$query);
if($result){
    echo json_encode("Data deleted");
}else{
    echo json_encode("error occured");
}

