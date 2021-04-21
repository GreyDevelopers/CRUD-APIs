<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = $id";

$result = mysqli_query($connection,$query);
if($result){
    echo json_encode("Data updated");
}else{
    echo json_encode("error occured");
}


?>