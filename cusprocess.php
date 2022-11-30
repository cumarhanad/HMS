<?php

include("connection.php");
include("navbar.php");
include("function.php");
?>
<div class="container-lg mt-4">
<div class="card">
  <h5 class="card-header">list</h5>
  <div class="card-body">
    <?php

if(isset ($_POST['cusSave'])){
    $cusname=$_POST['cusname'];
    $cusaddress=$_POST['cusaddress'];
    $cusphone=$_POST['cusphone'];
   $res= cusadd($con,$cusname,$cusaddress,$cusphone);
    if($res=1){
        ?>
        <div class="aler alert-succes p-1"> Successfully</div>
        <?php
    }
    if($res!=1){
        ?>
        <div class="aler alert-succes p-1"> Error</div>
        <?php
    }
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $cusname=$_POST['cusname'];
    $cusaddress=$_POST['cusaddress'];
    $cusphone=$_POST['cusphone'];
    $res= custUpdate($con,$cusname,$cusaddress,$cusphone,$id);
    if($res=1){
        ?>
        <div class="aler alert-succes p-1"> Successfully</div>
        <?php
        
    }
    if($res!=1){
        ?>
        <div class="aler alert-succes p-1"> Failed</div>
        <?php
        
    }

}
?>

<table class="table table-bordered" id="myTable">
    <thead>
    <tr>
        <th class="text-center">no</th>
        <th class="text-center">Name</th>
        <th class="text-center">Address</th>
        <th class="text-center">phone</th>
        <th class="text-center">Date</th>
        <th class="text-center">Action</th>
</tr>
</thead>
<tbody>
  

 
<?php
$n=1;
$query=mysqli_query($con,"select * from customer order by date desc");
while($data=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo$n;?></td>
    <td><?php echo $data['cusname'];?></td> 
    <td><?php echo $data['address'];?></td>
    <td><?php echo $data['phone'];?></td>
    <td><?php echo $data['date'];?></td>
    <td>
        <a href="update.php?id=<?php echo $data['cusid'];?>" class="btn btn-outline-primary">Edit</a>|
        <a href="delete.php?id=<?php echo $data['cusid'];?>" class="btn btn-outline-danger">Delete</a>
    </td>
    
</tr>

<?php
$n++;
}
?>
   
</tbody>
</table>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>