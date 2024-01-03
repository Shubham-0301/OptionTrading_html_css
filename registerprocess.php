<?php
include("connect.php");
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$gender = $_POST["gender"];

$sql = "insert into register values('null','$fullname','$username','$email','$phone','$password','$gender')";
$query = mysqli_query($conn, $sql);
if ($query) {
     header('Location: /trading/index.html');
    echo "data inserted";
} else {
    echo "error";

}

?>