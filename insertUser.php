<<<<<<< HEAD
<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

$result = mysqli_query($connection,$query);
if($result){
    echo json_encode("Data inserted");
}else{
    echo json_encode("error occured");
}


=======
<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

$result = mysqli_query($connection,$query);
if($result){
    echo json_encode("Data inserted");
}else{
    echo json_encode("error occured");
}


>>>>>>> master
?>