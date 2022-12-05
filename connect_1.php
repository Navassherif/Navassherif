<?php
$servername='localhost';
$username='root';
$password='';
$dbname='buycart';
$conn=new mysqli($servername,$username,$password,$dbname);
//get values by name
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$address_1 =$_POST['address_1'];
$address_2 =$_POST['address_2'];
$state =$_POST['state'];
$pin =$_POST['pin'];
//insert values
$sql="INSERT INTO add_reg(Name,Email,Phone,Address_1,Address_2,State,Pin)VALUES('$name','$email','$phone','$address_1','$address_2','$state','$pin')";
if ($conn->query($sql)===TRUE) {

    echo"";
}
else{
    echo "error in sending massage ";
}
?>