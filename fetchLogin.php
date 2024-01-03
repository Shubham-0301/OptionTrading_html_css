<?php
include("connect.php");

$email = $_POST["email"];
$pass = $_POST["password"];
$sql = "select * from register where email='$email'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
   
    while ($row = mysqli_fetch_assoc($query)) {
        if ($pass==$row['password']) {
            session_start();
            $_SESSION['id'] = $row['id'];
            echo "yes";
             header('Location: /trading/homepage.html');

        } else {
            echo "no";
        }

    }

} else {
    echo 'out';

}

?>