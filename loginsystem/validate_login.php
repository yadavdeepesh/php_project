<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // var_dump($_POST);
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    // echo "in next file". $username." ".$password;
    // exit;
    $sql = "SELECT * FROM `users` where `user_name` = '$username' AND `password`='$password'";

    // var_dump($sql);
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    // echo $num;
    // exit;

    if($num == 1){
        $login = true;
        // session_start();
        // $_SESSION['login'] = $true;
        echo "This user is already exist";
    }
    else{
        $showError = "Invalid Credentials";
        // echo "in valid";
        echo "Invalid Credentials";
        // session_start();
        // $_SESSION['showError'] = $showError;
    }
}
    
?>