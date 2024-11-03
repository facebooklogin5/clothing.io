<?php 
error_reporting(0);
$servername="localhost";
$Emailaddressorphonenumber="root";
$password="";
$dbname="code"
$check=mysqli_connect($servername,$Emailaddressorphonenumber,$password,$dbname);

if($check){
    echo "Connection ok";
}
else{
    echo "Connection Fail";
}

$Emailaddressorphonenumber=$_POST['Emailaddressorphonenumber']
$password=$_POST['password']

$send="INSERT INTO logi VALUES('','$Emailaddressorphonenumber','$password')" ;
$data=mysqli_query($check,$send);

if($data){
    echo "Data send"
}
else(
    echo "Data not send"
)
?>