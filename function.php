<?php

function cusadd($con,$cusname,$cusaddress,$cusphone){
    $query=mysqli_query($con,"insert into customer values(null,'$cusname','$cusaddress','$cusphone',null)");
    if($query){
        return 1;
    }

else{
    return 2;
}
}

function custUpdate($con,$cusname,$cusaddress,$cusphone,$id){
    $query=mysqli_query($con,"update  customer set cusname='$cusname',
    address='$cusaddress',
    phone='$cusphone'
    where cusid='$id'");
    if($query){
        return 1;
    }

else{
    return 2;
}
}