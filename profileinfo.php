



<div class="col-md-6 ">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Basic Information </h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Username : <span class="modal-text d-flex justify-content-sm-end"  data-toggle="modal" data-target="#usernameModal"> Edit </span> </li>
        <li class="list-group-item">Email : | <span class="modal-text"  data-toggle="modal" data-target="#emailModal"> Edit </span></li>
          <li class="list-group-item">Password : ******** | <span class="modal-text"  data-toggle="modal" data-target="#pswModal"> Edit </span></li>
        <li class="list-group-item"> School: | <span class="modal-text"  data-toggle="modal" data-target="#schoolModal"> Edit </span></li>
        <li class="list-group-item">Position: | <span class="modal-text"  data-toggle="modal" data-target="#positionModal"> Edit </span></li>
        <!--li class="list-group-item">Vestibulum at eros</li-->
      </ul>
    </div>
  </div>
</div> <!-- end col-->

<!------------------------------->


<!-- Modal -->
<div class="modal fade" id="usernameModal" tabindex="-1" role="dialog" aria-labelledby="usernameModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usernameModalLabel">Update username</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="staticUsername" class="sr-only">New:</label>
            <input type="text" class="form-control" id="staticUsername" name="username">
          </div>
        <form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
