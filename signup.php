 <?php

session_start();
include 'includes/dbconnect.php';
include 'includes/function/user.php';

if( isset($_POST['submission']) ){
    if($_POST['password'] != $_POST['password_confirm']){
        $error = "password not the same";
    }else{
        $login = signup($_POST['username'],$_POST['password'], $_POST['email'], $_POST['position'], $_POST['school']);
        if(!$login){
            echo "User registration failed";
        }else{
            header("location: index.php");
        }
    }

}

?>

<!DOCTYPE html>
<html>

<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/main.css">

</head>


<body>

<!--form method="post" action="signup.php" style="border:1px solid #ccc"-->
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <form class="form-horizontal" action='signup.php' method="POST">


    <div id="legend">

    </div>
    <div class="control-group">
         <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required>

      </div>
    </div>

    <div class="control-group">
         <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge" required>

      </div>
    </div>

    <div class="control-group">
    <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>

      </div>
    </div>

    <div class="control-group">
         <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Confirm you password</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required>

      </div>
    </div>

       <div class="control-group">
            <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- Position -->
      <label class="control-label"  for="Position">Position</label>
      <div class="controls">
        <input type="text" id="position" name="position" placeholder="" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>




      <div class="control-group">
           <?php if( isset($error)){
        echo '<span>'.$error.'</span>';
    } ?>
      <!-- Position -->
      <label class="control-label"  for="School">What school did you attend?.</label>
      <div class="controls">
        <input type="text" id="school" name="school" placeholder="" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>

    <p class="">By creating an account you agree to our <a href="term&privacy.php" style="color:dodgerblue">Terms & Privacy</a>.</p class>


    <div class="clearfix">
      <a type="button" href="index.php" class="cancelbtn" role="cancel">Cancel</a>
      <button type ="submit" name="submission" class="signupbtn" role="button" >Sign Up</button>


      </div>
    </div>
	</div>
</form>


<!------------------------   JS   ------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </div>


<?php
    include 'footer.php';
?>

</body>
</html>
