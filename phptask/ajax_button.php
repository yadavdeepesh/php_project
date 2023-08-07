<?php
session_start();

// echo var_dump($_SESSION);
// echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Load Using Ajax</title>


<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>



   <div class="container">
   <h1>Choose an option:</h1>
    <input type="radio" name="options" value="male" id="male" onchange="saveToDatabaseGender(this.value)"><label for="male">male</label><br>
    <input type="radio" name="options" value="female" id="female" onchange="saveToDatabaseGender(this.value)"><label for="female">female</label><br>
    <input type="radio" name="options" value="other" id="other" onchange="saveToDatabaseGender(this.value)"> <label for="other">Other</label><br>
    <a href="form.php"> Back </a>
    </div>

    <div class="datediv container ">
    <h1>Select a date:</h1>
    <input type="date" id="dateInput" onchange="saveToDatabaseDate()">
    <a href="form.php"> Back </a>
    </div>
   

<?php //echo  $_SESSION['name']; ?>
<script type="text/JavaScript">
    // save gender to database
    $('.datediv').hide();

     function saveToDatabaseGender(value) {
    // Create a new XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define the AJAX request
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Callback function (optional)
            console.log(this.responseText); // You can do something with the response if needed
        }
    };

    // Prepare the request (replace 'save_to_database.php' with your server-side script)
    var url = "ajax_button_save_gender_db.php";
    var params = "gender=" + value;
    // alert(params);
    if(params.length!=0){
        // alert(params);
        $('.container').hide();
        $('.datediv').show();

    }

    // Send the AJAX request (POST method in this example)
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(params);

    
}
// save date to database

function saveToDatabaseDate() {
    // Get the selected date from the date input
    var selectedDate = document.getElementById("dateInput").value;

    // Create a new XMLHttpRequest object
    var xhttp = new XMLHttpRequest();
    
    console.log(selectedDate);
    // Define the AJAX request
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Callback function (optional)
            console.log("complete");
            window.location.replace("ajax_form_complete.php");
            console.log(this.responseText); // You can do something with the response if needed
        }
    };

    // Prepare the request (replace 'save_date_to_database.php' with your server-side script)
    var url = "ajax_save_date_db.php";
    var params = "selected_date=" + selectedDate;

    // Send the AJAX request (POST method in this example)
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(params);
}


</script>    
    <!-- jQuery CDN link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>