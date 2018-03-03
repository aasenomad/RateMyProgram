<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile!</title>
  </head>
  <body>
    <h1>My profile,</h1>
    <div class="row">
      <div class="col-md-2 navigation-bar">
        <nav class="nav flex-column nav-tabs" id="myTab" role="tablist">
          <a class="nav-link active" data-toggle="tab" aria-controls="profile" aria-selected="true" href="#profile" id="profile-tab"> Profile</a>
          <a class="nav-link" data-toggle="tab" aria-controls="saved" aria-selected="false" href="#saved" id="save-tab">Saved</a>
          <a class="nav-link" data-toggle="tab" aria-controls="review" aria-selected="false" href="#review" id="review-tab">Reviews</a>
          <a class="nav-link" data-toggle="tab" aria-controls="post" aria-selected="false" href="#post" id="post-tab">Posts</a>
        </nav>
      </div>
      <div class="col-md">
        <div class="tab-content">
          <div class="tab-pane" id="saved" role="tabpanel" aria-labelledby="save-tab"> <?php include 'file.txt'; ?> </div>
          <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <?php include 'file.txt'; ?></div>
          <div class="tab-pane" id="post" role="tabpanel" aria-labelledby="post-tab"></ <?php include 'file.txt'; ?>div>
          <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab"> <?php include 'file.txt'; ?></div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
