<?php
$n =$_POST['user'];
$c =$_POST['email'];
$d =$_POST['feedback'];
$con=mysqli_connect("localhost","root","","login");
$sql="INSERT INTO contact(fullname,email,feedback) values('$n','$c','$d')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo" CREATED SUCCESSFULLY";
}
else {
    echo " PLEASE TRY AGAIN ";
}

?> 