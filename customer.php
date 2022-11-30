<?php

include("navbar.php");
?>

<div class="container-lg mt-5 pt-4">
<div class="card">
  <h5 class="card-header"> Customer Registration </h5>
  <div class="card-body">

  <form action="cusprocess.php"method="post" id="cusform">

  <div class="row">
    <label class="form-label">Name</label>
    <input type="text"name="cusname" class="form-control sm form-control-sm">
    <label class="form-label">Address</label>
    <input type="text"name="cusaddress" class="form-control sm form-control-sm">
    <label class="form-label">phone</label>
    <input type="text"name="cusphone" class="form-control sm form-control-sm">
    <input type="submit"value="save" name="cusSave"class="btn btn-primary btn-ms mt-1">
  </div>

  </div>
</div>
</div>
