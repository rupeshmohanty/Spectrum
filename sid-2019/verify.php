<?php
    include('../config.php');
    session_start();
    $msg = '';    
    $regd_no = mysqli_escape_string($con,strip_tags($_POST['regd_no']));
    $search = "SELECT * FROM verify WHERE regd_no='$regd_no'";
    $search_result = mysqli_query($con,$search) or die(mysqli_error($con));
    if(mysqli_num_rows($search_result) == 1) {
        $msg = 'success';
        header('Location: certificate.php');
    } else {
        $msg = 'failure';
        header('Location: index.php');
    }
    $_SESSION['regd_no'] = $regd_no;
    $_SESSION['msg'] = $msg;
?>