<?php


$mail=$_POST['email'];
$pass=$_POST['pass'];

session_start();
$_SESSION['login']=false;

$conn=new mysqli("localhost","root","",'db1');

if($conn->connect_error)
{
    echo "Error";
    echo $conn->connect_error;
    die;
}

// $sql_obj=mysqli_query($conn,"select * from tusers where username='$username'");
// $totalr=mysqli_num_rows($sql_obj);

$sql_obj1=mysqli_query($conn,"select * from student where uname='$mail' and passwd='$pass'");
$totalr=mysqli_num_rows($sql_obj1);

if($totalr==0)
{
    echo "You have not registered.";
    die;    
}

     $row=mysqli_fetch_assoc($sql_obj1);
     $uid=$row['uid'];
     $username=$row['username'];

    
    echo "<h1>Login successful</h1>";
    $_SESSION['login']=true;
    // $_SESSION['userid']=$uid;
    // $_SESSION['username']=$username;
    // $_SESSION['cart']=array();

    header('location:http://127.0.0.1:5500/studgr.html')



?>