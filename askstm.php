<?php
include('includes/functions.php');
if(isset($_POST)){
    $data = $_POST;
    $data = get_api_data_post("http://localhost/apis.stmorg.in/askstm/ask", $data);
    $data = json_decode($data, true);
    if($data['status'] == 'success'){
        echo '<script>alert("Your request has been submitted successfully !!");</script>';
    }else{
        echo '<script>alert("Something went wrong !");</script>';
    }
    echo "<script>window.location.href='ask'</script>";
}