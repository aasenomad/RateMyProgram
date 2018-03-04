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

    <!--Ratings Results Head Tag----------->


    <!--Comments Section Head Tag-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
  <a class="navbar-brand" href="#">Ratings by Categories</a>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <h4 class="display-4"></h4>
    <p class="lead">

        <!--Ratings Results BEGIN----------->
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>



        <?php

    $averageRates = getProgramRate($idschool);

    foreach ($averageRates as $rateinfo){

        echo '
            <tr>
          <td>'.$rateinfo['value'].' </td>
          <td>'.$rateinfo['avg'].'</td>
          </tr>
          ';
        }

        ?>



  </tbody>
</table>
        <!---Ratings Results END--->

    </p>
  </div>
</div>
<br>


<!--nav bar-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Comment Forum (45)</a>
</nav>
<br>


<!--Comments Section-->

<div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="page-header">

                  </div>
                   <div class="comments-list">
                       <div class="media">
                           <p class="pull-right"><small>2 days ago  </small></p>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Thomas Shoemak</h4>
                              Wow! this is really great.

                              <p><small><a href="">Like</a> - <a href="">Flag</a></small></p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>5 days ago</small></p>
                            <div class="media-body">
                              <h4 class="media-heading user_name">Baltej Singh</h4>
                              Fantastic Program!

                              <p><small><a href="">Like</a> - <a href="">Flag</a></small></p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>15 days ago</small></p>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Diego Shanter</h4>
                              Not pleased. Could have learned more someplace else.

                              <p><small><a href="">Like</a> - <a href="">Flag</a></small></p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>34 days ago</small></p>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Bassent Malak</h4>
                              Terrible experience. Not recommended.

                              <p><small><a href="">Like</a> - <a href="">Flag</a></small></p>
                            </div>
                          </div>
                   </div>



                </div>
            </div>
        </div>

<!---COMMENTS END--->




<br><br><br>


<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--bootstrap-->

</div>
</body>
</html>
