<?php

$conn=new mysqli("localhost","root","",'db1');

$mail=$_POST['mail'];
$password1=$_POST['pass'];


$conn=new mysqli("localhost","root","",'db1');

if($conn->connect_error)
{
    echo "Error";
    echo $conn->connect_error;
    die;
}

$sql_obj=mysqli_query($conn,"select * from student where uname='$mail'");
$totalr=mysqli_num_rows($sql_obj);

if($totalr>0)
{
    echo "Mail already exists.";
    die;
    
}

$querry=mysqli_query($conn,"insert into student(uname,passwd) Values ('$mail','$password1')");
if ($querry)
{
    echo "Registration is successful";
    header('location:http://127.0.0.1:5500/sign%20in.html');
}
else{
    echo "<h1>Registration failed</h1>";
}
    

print_r();
?>