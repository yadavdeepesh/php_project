<?php
//   echo "running";
 
  // Start the session and get the data
//   session_start();
//   var_dump($_SESSION);
//   var_dump($_POST);
    if($_POST['gender'] && $_POST['name']){

        $gender = $_POST['gender'];
        $name = $_POST['name'];
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = "testdb";
  
        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        $sql = "UPDATE `testdb` SET `gender` = '$gender' WHERE `name` = '$name'";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        // echo var_dump($result);
      $aff = mysqli_affected_rows($conn);
      //echo "<br>Number of affected rows: $aff <br>";
      echo '<label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday">';
    }

  ?>
  

exit;
?>