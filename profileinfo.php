



<div class="col-md-6 ">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Basic Information </h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Username : <?php echo $_SESSION['username']; ?> <span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#usernameModal"> Edit </span> </li>
        <li class="list-group-item">Email :  <?php echo $_SESSION['email']; ?> <span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#emailModal"> Edit </span></li>
          <li class="list-group-item">Password : ******** <span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#pswModal"> Edit </span></li>
        <li class="list-group-item"> School:  <?php echo $_SESSION['school']; ?> <span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#schoolModal"> Edit </span></li>
        <li class="list-group-item">Position: <?php echo $_SESSION['position']; ?><span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#positionModal"> Edit </span></li>
        <!--li class="list-group-item">Vestibulum at eros</li-->
      </ul>
    </div>
  </div>
</div> <!-- end col-->

<!------------------------------->


<!-- Modal username -->
<div class="modal fade" id="usernameModal" tabindex="-1" role="dialog" aria-labelledby="usernameModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usernameModalLabel">Update username</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-inline">
        <div class="modal-body">
          <div class="form-group">
            <label for="staticUsername" class="sr-only">New:</label>
            <input type="text" class="form-control" id="staticUsername" name="username">
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal email -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="emailModalLabel">Update email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-inline">
        <div class="modal-body">
            <div class="form-group">
              <label for="staticEmail" class="sr-only">New:</label>
              <input type="email" class="form-control" id="staticEmail" name="email" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal password -->
<div class="modal fade" id="pswModal" tabindex="-1" role="dialog" aria-labelledby="pswModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usernameModalLabel">Update Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-inline">
        <div class="modal-body">
          <div class="form-group">
            <label for="staticpwd" class="sr-only">Current:</label>
            <input type="password" class="form-control" id="staticpwd" name="pwd1">
          </div>
          <div class="form-group">
            <label for="staticpwd" class="sr-only">New:</label>
            <input type="password" class="form-control" id="staticpwd" name="pwd2">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      <form>
    </div>
  </div>
</div>

<!-- Modal School -->
<div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="SchoolModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SchoolModalLabel">Update School</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-inline">
        <div class="modal-body">
          <div class="form-group">
            <label for="staticSchool" class="sr-only">New:</label>
            <input type="text" class="form-control" id="staticSchool" name="School
            ">
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal position -->
<div class="modal fade" id="positionModal" tabindex="-1" role="dialog" aria-labelledby="positionModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="positionModalLabel">Update Position</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-inline">
        <div class="modal-body">
          <div class="form-group">
            <label for="staticPosition" class="sr-only">New:</label>
            <input type="text" class="form-control" id="staticPosition" name="position">
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
