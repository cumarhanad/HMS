<?php
include("navbar.php");
include("connection.php");
?>
<?php
$id=$_GET['id'];
$query=mysqli_query($con,"select * from customer where cusid='$id'");
if($rows=mysqli_fetch_assoc($query)){
?>
<div class="container-lg mt-5">
<div class="card">
  <h5 class="card-header"> Customer Registration </h5>
  <div class="card-body">
  <form action="cusprocess.php" method="post">
  <div class="row">
    <label class="form-label">Name</label>
    <input type="hidden" name="id" value="<?php echo $rows['cusid'];?>">
    <input type="text"name="cusname" class="form-control sm form-control-sm" value="<?php echo $rows['cusname'];?>" >
    <label class="form-label">Address</label>
    <input type="text"name="cusaddress" class="form-control sm form-control-sm" value="<?php echo $rows['address'];?>" >
    <label class="form-label">phone</label>
    <input type="text"name="cusphone" class="form-control sm form-control-sm" value="<?php echo $rows['phone'];?>">
    <input type="submit"value="save Changes" name="update" class="btn btn-primary btn-ms mt-1" >
  </div>
  </div>
</div>
</div>
<?php
}
?>