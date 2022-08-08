<?php
$firstName =$_POST['ftName'];
$lastName =$_POST['ltName'];
$comingfrom =$_POST['comingfrom'];
$destination =$_POST['destination'];
$departing =$_POST['departing'];
$returning =$_POST['returning'];
$children =$_POST['children'];
$adults =$_POST['adults'];
$con=mysqli_connect ("localhost","root","","reservation");
$sql="INSERT INTO booking(firstName,lastName,comingfrom,destination,departing,returning,children,adults) values('$firstName','$lastName','$comingfrom','$destination','$departing','$returning','$children','$adults')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo" Booking not successfully";
}
else {
    echo "Booking  successfully";
}

?> 