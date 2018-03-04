
 <?php

session_start();
include 'includes/dbconnect.php';
include 'includes/function/userdetails.php';
include 'includes/function/ratings.php';

if ( isset($_GET['program'])){
    $idschool = $_GET['program'];
}elseif(isset($_GET['sid'])){
    $idschool = $_GET['sid'];
}else {$idschool = 1; }


if(isset($_POST['submission']) ){
    review($_POST['review'],$idschool);
    rate(1,$_POST['option1'],$idschool);
    rate(2,$_POST['option2'],$idschool);
    rate(3,$_POST['option3'],$idschool);
    rate(4,$_POST['option4'],$idschool);
    rate(5,$_POST['option5'],$idschool);
    rate(6,$_POST['option6'],$idschool);
}

?>



<!DOCTYPE html>
<html lang="en">

  <head>
      <!-- Bootstrap meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ratings Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link rel="stylesheet" href="css/main.css">
  </head>
<body>

<?php include 'header.php'; ?>
<br>

<div class="container">
<!--program identier>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Program Name</li>
  <li class="list-group-item">Degree</li>
  <li class="list-group-item">Location</li>
  <li class="list-group-item">Program Type</li>
</ul-->
<?php
    $prog = getSchool($idschool);
    echo '
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Program Name: '.$prog['nom'].'</li>
      <li class="list-group-item">Degree:   '.getProgram($prog['program']).'</li>
      <li class="list-group-item">Location: '.getState($prog['State']).'</li>
      <li class="list-group-item">Program Type: '.$prog['type'].'</li>
      <li class="list-group-item"><a href="'.$prog['website'].'" target=”_blank”>Visit Website</a></li>
    </ul>
    ';
?>

<br><br>


<!--nav bar-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Share your thoughts about the Program!</a>
</nav>

<!--Do/Don't Instruction-->
<div class="jumbotron jumbotron-fluid">
      <h4 class="display-4">Do's and Dont's</h4>
    <p class="lead">
        <strong>Don't</strong>
         Use profanity, name-calling, derogatory terms, definitive language, (e.g., "always","never","etc.").
        <br>
        <strong>Do</strong>
        Be honest
        <br>
        <strong>Do</strong>
        Double check your comments before posting. It doesn’t hurt to check grammar
    </p>
  </div>

    <!---bootstrap form-->
 <form method="post" action="#">
    <div class="form-group">
      <label for="ProsConsTextarea">Pros and Cons</label>
      <textarea class="form-control" name="review" id="ProsConsTextarea" rows="5" required></textarea>
    </div>


    <!--Rating Description-->
    <p>Comments</p>
    <!--Star Rating  -->
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <div id="mem" style="margin-left:10px">
            <label> Overall rating: </label>
      </div>

      <label class="btn btn-secondary">
        <input type="radio" name="option1" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option1" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option1" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option1" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option1" id="option5" value="4" autocomplete="off"> 5
      </label>
    </div>
    <br><br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">

      <div id="mem" style="margin-left:10px">
        <label> level of difficulty: </label>
      </div>

      <label class="btn btn-secondary">
        <input type="radio" name="option2" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option2" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option2" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option2" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option2" id="option5" value="5" autocomplete="off"> 5
      </label>
    </div>
    <br><br>
     <div class="btn-group btn-group-toggle" data-toggle="buttons">
         <div id="mem" style="margin-left:10px">
          <label> Academic quality: </label>
        </div>

      <label class="btn btn-secondary">
        <input type="radio" name="option3" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option3" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option3" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option3" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option3" id="option5" value="5" autocomplete="off"> 5
      </label>
    </div>
    <br><br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">
          <label> Research Opportunity: </label>
    </div>

      <label class="btn btn-secondary">
        <input type="radio" name="option4" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option4" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option4" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option4" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option4" id="option5" value="5" autocomplete="off"> 5
      </label>
    </div>


      <br><br>
           <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">
          <label> Location: </label>
    </div>

      <label class="btn btn-secondary">
        <input type="radio" name="option5" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option5" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option5" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option5" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option5" id="option5" value="5" autocomplete="off"> 5
      </label>
    </div>

      <br><br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
       <div id="mem" style="margin-left:10px">
          <label> Atmosphere (Respectful, Friendly, Fun people): </label>
    </div>

      <label class="btn btn-secondary ">
        <input type="radio" name="option6" id="option1" value="1" autocomplete="off" checked> 1
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option6" id="option2" value="2" autocomplete="off"> 2
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option6" id="option3" value="3" autocomplete="off"> 3
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option6" id="option4" value="4" autocomplete="off"> 4
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="option6" id="option5" value="5" autocomplete="off"> 5
      </label>

    <br><br>

    <div class="">
      <button type ="submit" name="submission" class="summit btn" role="button" >Submit</button>
    </div>


  </form>
    <!---->
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
