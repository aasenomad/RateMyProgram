<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"> Go save some programs !!! </h1>
    <p class="lead"> You don't have any save programs </p>
  </div>
</div>

<ul class="list-group">

<?php
$user = getSave($_SESSION["userid"]);
foreach ($user as $savedprogram){
  $school = getSchool($savedprogram['schoolID']);
  foreach ($school as $program){
    $total = commentTotal($program['schoolId']);
    $rate = getProgramRate2($program['schoolId']);
    echo '
    <li class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">'.$program['nom'].'</h5>
        <small>3 days ago</small>
      </div>
      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      <small> Overall Rating:  '.$rate.' | review: '.$total.'| <a href="ProgramPage?program='.$program['schoolId'].'"> more details </a> </small>
    </li>
    ';
  }
}
?>
</ul>
