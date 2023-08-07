<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // var_dump($_POST);
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $address = $_POST['address'];
    $exists=false;

      // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE user_name = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    
    // echo "total user".$numExistRows;
    // exit();

    if($numExistRows >0){
        $showError = "User is already exists";
    }
    elseif(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["cpassword"]) || empty($_POST["gender"]) || empty($_POST["phone"]) || empty($_POST["address"]) ){
     $showError ="field is empty";
    }
    else{
  if(($password == $cpassword)){
         // create the password hash
         $hash = password_hash($password, PASSWORD_DEFAULT); 
        $sql = " INSERT INTO `users` ( `user_name`, `password`, `cpassword`, `gender`, `phone`, `address`, `date`) VALUES ('$username', '$hash', '$hash', '$gender', '$phone', '$address', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
    }
  
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="/loginsystem/signup.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" maxlength="25" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="25" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" maxlength="25" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <div class="form-check form-check-inline form-group">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked="checked">
        <label class="form-check-label" for="male">male</label>
        </div>
       <div class="form-check form-check-inline form-group">
       <input class="form-check-input" type="radio" name="gender" id="female" value="female">
      <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check form-check-inline form-group">
       <input class="form-check-input" type="radio" name="gender" id="other" value="others">
       <label class="form-check-label" for="other">other</label>
       </div>
       <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" maxlength="10" name="phone" class="form-control" id="phone" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" maxlength="50" name="address" class="form-control" id="address" aria-describedby="emailHelp">
    </div>
        <button type="submit" class="btn btn-primary my-3">SignUp</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">
         
// function validateUser(){
//     // Get the selected date from the date input
//     var username = document.getElementById("username").value;
//     alert(username);

//     // Create a new XMLHttpRequest object
//     var xhttp = new XMLHttpRequest();
    
//     // // Define the AJAX request
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             // Callback function (optional)
//             console.log("complete 24432432");
          
//             console.log(this.responseText); // You can do something with the response if needed
//         }
//     };

//     // Prepare the request (replace 'save_date_to_database.php' with your server-side script)
//     var url = "validateUser.php";
//     var params = "username=" + username;

//     // Send the AJAX request (POST method in this example)
//     xhttp.open("POST", url, true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send(params);
// }
       

        </script>
  </body>
</html>
