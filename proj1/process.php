<?php
include 'page2.php';
if(isset($_POST['submit']))
{
    $user=$_POST['user'];
    $email=$_POST['email'];
    $cno=$_POST['cno'];
    $yr=$_POST['yr'];
    $br=$_POST['br'];
    $member=$_POST['member'];
    $food=$_POST['food'];
    $size=$_POST['size'];
    $sq1="insert into data(user,email,cno,yr,br,member,food,size) values('$user','$email','$cno','$yr','$br','$member','$food','$size')";
    if(mysqli_query($conn,$sq1))
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>