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
    

}

?>



<!DOCTYPE html>
<html lang="en">
  
    <head>
        
            <?php 
    include 'header.php';
?>
    
  
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
<div class="container">
<!--program identier-->
<ul class="list-group list-group-flush">
  <li class="list-group-item">Program Name</li>
  <li class="list-group-item">Degree</li>
  <li class="list-group-item">Location</li>
  <li class="list-group-item">Program Type</li>
</ul>

<br><br>

        
        
        
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
</div>

<br>






<br><br><br>
    
         
            <?php 
    include 'footer.php';
?>


<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--bootstrap-->

</div>
</body>
</html>
