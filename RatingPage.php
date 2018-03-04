@ -1,41 +1,18 @@
 <?php

<?php
session_start();
include 'includes/dbconnect.php';
include 'includes/function/userdetails.php';

if ( isset($_GET['program'])){
    $schoolId = $_GET['program'];

}else{$schoolId = 1; } 
        

if( isset($_POST['submission']) ){
    $review($_POST['review'],$schoolId);
    $rate(1,$_POST['option1'],$schoolId);
    $rate(2,$_POST['option2'],$schoolId);
    $rate(3,$_POST['option3'],$schoolId);
    $rate(4,$_POST['option4'],$schoolId);
    $rate(5,$_POST['option5'],$schoolId);
    $rate(6,$_POST['option6'],$schoolId);
    

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
        
            <?php 
    include 'header.php';
?>
    
  
  <head>
      <!-- Bootstrap meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@ -46,185 +23,56 @@ if( isset($_POST['submission']) ){
    <title>Ratings Page</title>
  </head>
<body>

<?php include 'header.php'; ?>
<br>

<div class="container">
<!--program identier-->
<ul class="list-group list-group-flush">
  <li class="list-group-item">Program Name</li>
  <li class="list-group-item">Degree</li>
  <li class="list-group-item">Location</li>
  <li class="list-group-item">Program Type</li>
</ul>
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
 <form method="post" action="#">
    <div class="form-group">
      <label for="ProsConsTextarea">Pros and Cons</label>
      <textarea class="form-control" name="review" id="ProsConsTextarea" rows="5"
        ></textarea>
    </div>
        

            <!--Rating Description-->

    <p>Comments</p>
    <div id="mem" style="margin-left:10px">  
          <label> Overall rating: </label>
    </div>   

    <!--Star Rating -------------- -->
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
     
      <label class="btn btn-secondary active">
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
        
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
              
              <div id="mem" style="margin-left:10px">  
          <label> level of difficulty: </label>
    </div>   

      <label class="btn btn-secondary active">
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
        
           <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">  
          <label> Academic quality: </label>
    </div>   

      <label class="btn btn-secondary active">
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
        
        
                
           <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">  
          <label> Research Opportunity: </label>
    </div>   

      <label class="btn btn-secondary active">
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
        
        
                     
           <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">  
          <label> Location: </label>
    </div>   
   
      <label class="btn btn-secondary active">
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
        
        
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <div id="mem" style="margin-left:10px">  
          <label> Atmosphere (Respectful, Friendly, Fun people): </label>
    </div>   
   
      <label class="btn btn-secondary active">
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
    <form action="ratings.php" method="post">
    <div class="form-group">
      <label for="ProsConsTextarea">Pros and Cons</label><br>
      <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    </div>
        
     
<!---star rating section of page BEGINS-->
<br><br>
<div class="">
  <button type ="submit" name="submission" class="summit btn" role="button" >Summit</button>
         
     </div>

<!---star rating section of page ENDS -->


    </form>
    <!---->
  </div>
@ -232,17 +80,51 @@ if( isset($_POST['submission']) ){

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
    
         
            <?php 
    include 'footer.php';
?>
<input type="submit" value="Submit">
<!----->

<br><br><br>

<!--Database storage upon submission-->






<!--bootstrap-->
