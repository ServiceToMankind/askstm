<?php
require('connection.php');
require('functions.php');
if(isset($_POST['submit'])){
    $name=get_safe_value($con,$_POST['name']);
    $number=get_safe_value($con,$_POST['number']);
    $msg=get_safe_value($con,$_POST['message']);
    date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d H:i:s');
    mysqli_query($con,"INSERT INTO `covid`(`name`, `mobile`, `msg`, `status`,`verify_status`, `added_on`) VALUES ('$name','$number','$msg','0','0','$date')");
    echo "<script>alert('Done, Our Volunteer will contact you soon');</script>";
    echo "<script>window.location.href='index'</script>";
}else{
    echo "<script>alert('Something went wrong, please try again after some time');</script>";
    echo "<script>window.location.href='index'</script>";
}