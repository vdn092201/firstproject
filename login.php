<?php
require_once('db.php');


$email = $_POST['email'];
$password = $_POST['password'];



// if (isset($email, $name, $nickname, $password, $repeatpass) && 
//     strlen($email) > 2 && strlen($name) > 2 && 
//     strlen($nickname) > 2 && strlen($password) > 2 && 
//     strlen($repeatpass) > 2) {
    

//     if ($password !== $repeatpass) {
//         header("Location: http://suniiii/indexxx.php?error=1");
//         exit();
//     }


    $sql1 = "SELECT * FROM `users` WHERE Pochta = '$email'";
    $userDB = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($userDB) > 0) {

        $user = mysqli_fetch_assoc($userDB);

        // $user['email'];
     
        if($user['password'] !== $password){
            header("Location: http://suniiii/indexxx.php?error=3");
        } else{
            header("Location: http://suniiii/profile.php");
            exit();
            
        }

        
    }else {
        header("Location: http://suniiii/login.php?error=4");
    exit();
    }


    // $sql = "INSERT INTO `users` (Pochta,Name, Nickname, password, repeatpass) VALUES ('$email','$name', '$nickname', 'password', '$repeatpass')";
    // if ($conn->query($sql) === TRUE) {
    //     header("Location: http://suniiii/indexxx.php?success=1");
    // } 
// } else {
//     header("Location: http://suniiii/indexxx.php?error=4");
// exit();
// }
?>