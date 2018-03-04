<?php
session_start();
include 'includes/dbconnect.php';
include 'includes/function/school.php';
include 'includes/function/ratings.php';

if( isset($_GET['options'])){
  if( isset($_GET['textsearch'])){
    $get = array_filter(SearchSchoolNameandType($_GET['options'],$_GET['textsearch']));
  }else{
    $get = array_filter(SearchSchoolType($_GET['options']));
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/searchresult.css">
    <title> Profile! </title>
  </head>

  <body>

    <?php include 'header.php'; ?>
    <hr>
    <?php include 'searchbar.html'; ?>

    <div class="container">
      <!--div class="row"-->
            <?php
            if(empty($get)){
                echo '
                <br><br>
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h3 class="display-4">We are sorry !! :( </h3>
                    <p class="lead">There are no resuls for your search. Be the first to rate ! <br> Send Us your program details <a href="contact.php"> here </a> and we will find it for you :) </p>
                  </div>
              </div>
                ';
            }else{
              echo '<br><br><ul class="list-group">';
                foreach ($get as $program) {
                  $averageRates = getProgramRate2($program['schoolId']);
                  echo '
                  <li class="list-group-item card">
                    <a href="ProgramPage.php?program='.$program['schoolId'].'" >
                          <div class="card-body">
                              <h4 class="list-group-item-heading"> '.$program['nom'].' </h4>
                              <p class="list-group-item-text">
                                  Average '.$averageRates['avg'].'
                                  <br>
                                  <form id="oulala" metho="post" action="ajaxsave.php">
                                    <input type="text" name="id" value="'.$program['schoolId'].'" hidden>
                                    <button data-toggle="modal" type="submit" data-target="#exampleModalCenter"> Save </button>
                                  </form>

                                  <div class="d-flex justify-content-end">
                                  <a href="RatingPage.php?program='.$program['schoolId'].'" type="button" class="btn btn-default"> Rate Now! </a>
                                  </div>

                              </p>

                          </div>
                    </a>
                  <li>
                  ';
                }
              }
             ?>
           </ul>
  	   <!--/div> <!-- end row-->
     </div><!-- end container-->

     <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <?php
            if( !isset($_SESSION['connected']) || $_SESSION['connected'] != true){
               echo "Please connect to your account";
            }else{
              echo "Saved";
            }
          ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

     <?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="includes/jquery-3.3.1.min.js"></script>
    <script>
    $(function() {
        var form = $('#oulala');
           $('#oulala').submit(function(event) {
            event.preventDefault();
            var formData =$('#oulala').serialize();
            $.ajax({
                type: 'POST',
                url:'ajaxsave.php',
                data: formData
            });
        });
      });
    </script>
  </body>

</html>
