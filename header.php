
<?php
include 'includes/function/userdetails.php';

if ( isset($_POST["log"])){
  $log = login($_POST["email"],$_POST["pwd"]);
  if (!$log){
    $error = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    ';
  }

}
?>

<header>

<?php
if ( isset($_SESSION["connected"]) && $_SESSION["connected"]== true){
  echo'
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php"> Home </a>
  <div class="d-flex justify-content-end">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-secret"></i> Hello,'. $_SESSION['username'].'
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="dropdown-item" href="profile.php?id='. $_SESSION["userid"].'"> Dashboard </a>
        <a class="dropdown-item" href="logout.php"> Logout </a>
      </div>
    </div>
  </div>
  </nav>';
}else {
?>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php"> Home </a>
  <form class="form-inline d-flex justify-content-end" method="post" action="#">
    <!---  ERROR MESSAGE----->
    <?php
    if ( isset(  $error)){  echo  $error; }
     ?>
    <label class="sr-only" for="inlineFormEmail">Email</label>
    <input type="email" name="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputEmail" placeholder="Email" required>

    <label class="sr-only" for="inlineFormInputGroupPassword">Password</label>
    <input type="password" name="pwd" class="form-control mb-2 mr-sm-2" id="inlineFormInputGroupPassword" placeholder="Password" required>

    <div class="btn-group" role="group" aria-label="auth">
      <button type="submit" name="log" class="btn btn-primary mb-2">Submit</button>
      <a href="signup.php" type="button" class="btn btn-primary mb-2">Sign Up</a>
    </div>
  </form>
</nav>
<?php
}
?>
<br>

</header>
