<?php
require_once('db.php');


$email = $_POST['email'];
$name = $_POST['full_name'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$repeatpass = $_POST['password2'];



if (isset($email, $name, $nickname, $password, $repeatpass) && 
    strlen($email) > 2 && strlen($name) > 2 && 
    strlen($nickname) > 2 && strlen($password) > 2 && 
    strlen($repeatpass) > 2) {
    

    if ($password !== $repeatpass) {
        header("Location: http://suniiii/indexxx.php?error=1");
        exit();
    }


    $sql1 = "SELECT * FROM `users` WHERE Pochta = '$email'";
    $user = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($user) > 0) {
        
        header("Location: http://suniiii/indexxx.php?error=3");
        exit();
    }


    $sql = "INSERT INTO `users` (Pochta,Name, Nickname, password, repeatpass) VALUES ('$email','$name', '$nickname', '$password', '$repeatpass')";
    if ($conn->query($sql) === TRUE) {
        header("Location: http://suniiii/indexxx.php?success=1");
    } 
} else {
    header("Location: http://suniiii/indexxx.php?error=4");
exit();
}
?>