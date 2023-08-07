<?php
session_start();

echo var_dump($_SESSION);
echo $_SESSION['name'];
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
    <div id="loaddata">
        <h1> This is goning to change</h1>

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
    </div>
    <button class="btn btn-success btnclick"> Click On It </button>
</div>

<?php echo  $_SESSION['name']; ?>
<script type="text/JavaScript">
     
    $(document).ready(function() {
        $('.btnclick').click(function(){
        // alert("running");
         var gender= document.getElementsByName("gender");
         var date =$('#birthday').val();
         console.log(date);
        //  alert(gender);
        var male = $('#male').val();
        var female = $('#female').val();
        var other = $('#other').val();
        if (male.length != 0) {
            var gender = male;
            }
            else if (female.length != 0) {
            var gender = female;
            }
            else if (other.length != 0) {
            var gender = other;
            }

            alert(gender);
        // var female = $('#female').val();
        // var other = $('#other').val();
        // Var id =2;
        // alert(male);
        $.post('update_gender.php',{
            gender:male,
            name: '<?php echo  $_SESSION['name']; ?>'
        },function(data,status){
            $('#loaddata').html(data);
            alert(status);
        })
        });
    })

</script>    
    <!-- jQuery CDN link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>