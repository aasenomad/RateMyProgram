<?php
session_start();
include 'includes/dbconnect.php';
include 'includes/function/ratings.php';
if(isset($_GET['sid'])){
    $idschool = $_GET['sid'];
}else{
    $idschool = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Bootstrap meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!---->
<!---bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----->
    <title>Ratings Page</title>
  </head>
<body>

<?php include 'header.php'; ?>
<br>

<div class="container">
<!--program identier-->
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
<!---->

<!--nav bar-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Share your thoughts about the Program!</a>
</nav>

<!--Do/Don't Instruction-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
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
    <!---bootstrap form-->


    <form action="ratings.php" method="post">
    <div class="form-group">
      <label for="ProsConsTextarea">Pros and Cons</label><br>
      <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    </div>
    </form>
    <!---->
  </div>
</div>

<br>

<!---star rating section of page BEGINS-->

<!--nav bar-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Rate the Program!</a>
</nav>
<!--Rating Description-->

<p>Overall Program Rating</p>

<!--Star Rating  -->
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> 1
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off"> 2
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option3" autocomplete="off"> 3
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option4" autocomplete="off"> 4
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option5" autocomplete="off"> 5
  </label>
</div>


<!---star rating section of page ENDS -->


<!--submit button-->
<br><br><br>
<input type="submit" value="Submit">
<!----->

<br><br><br>

<!--Database storage upon submission-->






<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--bootstrap-->

</div>
</body>
</html>
