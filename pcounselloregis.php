<?php

$conn=new mysqli("localhost","root","",'db1');

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$eadd=$_GET['eaddress'];
$phone=$_GET['phone'];
$expdomain=$_GET['ExpDomain'];
$yrs=$_GET['yrs'];
$company=$_GET['Company'];

$sp=' ';
$name=$fname.$sp.$lname;



$conn=new mysqli("localhost","root","",'db1');

if($conn->connect_error)
{
    echo "Error";
    echo $conn->connect_error;
    die;
}

// $sql_obj=mysqli_query($conn,"select * from tusers where username='$username'");
// $totalr=mysqli_num_rows($sql_obj);

// if($totalr>0)
// {
//     echo "Username already exists.";
//     die;
    
// }

$querry=mysqli_query($conn,"insert into counslr (name,email,phno,exp,yrs_exp,company) Values ('$name','$eadd','$phone','$expdomain',$yrs,'$company')");
if ($querry)
{
    echo "Data accepted!";
    header('location:http://127.0.0.1:5500/home.html');
}
else{
    echo "<h1>Data failed</h1>";
}
    

print_r();
?>