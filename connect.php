 <?php
$n =$_POST['username'];
$c =$_POST['userpassword'];
$con=mysqli_connect("localhost","root","","login");
$sql="INSERT INTO login(username,Userpassword) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo" USER LOGIN SUCCESSFULLY";
}
else {
    echo "LOGIN NOT SUCCESSFULLY";
}

?> 