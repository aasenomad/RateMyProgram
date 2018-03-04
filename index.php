<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rate My Program - Review College Programs Nationwide</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/main.css">
</head>



<body>
	<?php include 'header.php'; ?>
<br>
<br>
<br>
<?php include 'searchbar.html'; ?>

<br>

<div class="container">
	<div class="d-flex justify-content-center">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/FSU.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/UNC.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/gsupic.gif"  alt="Third slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="img/MiamiU.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Embry-riddle.jpg"  alt="Fifth slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="img/georgia-tech_0.gif"  alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/duke.png" alt="Seventh slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="img/georgia.png"  alt="Eighth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/fb-emory.gif"  alt="Ninth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
