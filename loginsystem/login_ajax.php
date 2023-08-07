
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    // session_start();
    // $login = false;
    // $showError = false;
    
    // if(isset($_SESSION['login'])){
    //     $login = $_SESSION['login'];

    // }
    // echo $showError;
    // echo $login;
    // if($login){
    // echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> You login sucessfully
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //     </button>
    // </div> ';
    // }
  
    // if($showError){
    // echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error!</strong> '. $showError.'
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //     </button>
    // </div> ';
    // }
    ?>


    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <!-- <form action="/loginsystem/login_ajax.php" method="post"> -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
    
        <button onclick="validateLogin()">Ajax Login</button>
        <p id="result"></p>
     <!-- </form> -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validateLogin() {
            var username = $('#username').val();
            var password = $('#password').val();
            console.log(username);
            console.log(password);
            $.ajax({
                url: 'validate_login.php',
                method: 'POST',
                data: { 
                    username: username,
                    password: password
                     },
                success: function(response) {
                    alert(response);
                    console.log(response);
                    $('#result').text(response);
            
                }
            });
        }
    </script>
  </body>
</html>
