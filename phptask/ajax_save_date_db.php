<?php
//   echo "running";
 
  // Start the session and get the data
  session_start();
 
//   var_dump($_SESSION);
//   var_dump($_POST);
    if($_POST['selected_date']){
        $date = $_POST['selected_date'];
        echo $date;
        // exit;
        If(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
           
          }
     
        // $name = $_POST['name'];
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
        $sql = "UPDATE `testdb` SET `date` = '$date' WHERE `name` = '$name'";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        // echo var_dump($result);
      $aff = mysqli_affected_rows($conn);
      if($aff){
       //echo ' window.location.href = "/phptask/ajax_form_complete.php"';
        echo header('Location: /phptask/ajax_form_complete.php');
      }
      //echo "<br>Number of affected rows: $aff <br>";
   
    }
  ?>
  

