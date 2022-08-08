<?php
$f =$_POST['firstname'];
$l =$_POST['lastname'];
$c =$_POST['comingfrom'];
$d =$_POST['destination'];
$e =$_POST['departing'];
$r =$_POST['returning'];
$i =$_POST['children'];
$a =$_POST['adults'];
$conn = mysqli_connect("localhost","root","","login");
$sql="INSERT INTO `reservation`(`firstName`,`lastName`,`comingfrom`,`destination`,`departing`,`returning`,`children`,`adults`) values('$f','$l','$c','$d','$e','$r','$i','$a')";

$r=mysqli_query($conn,$sql);
if($r)
{
    echo" BOOKING SUCCESSFULLY";
}
else {
    echo "BOOKING NOT SUCCESSFULLY";
}

?> 