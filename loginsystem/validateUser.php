<?php 
if(isset($_POST['username'])){
    include 'partials/_dbconnect.php';
    $username= $_POST['username'];

      // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE user_name = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    
    // echo "total user".$numExistRows;
    // exit();

    if($numExistRows >0){
        $showError = "User is already exists";
        echo $showError;
        exit();
    }
    else{
        echo "valid user";
    }

}
 
?>