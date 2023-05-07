<?php
include "database.php";


if(isset($_POST['admision=form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $program = $_POST['program'];
    $course = $_POST['course'];

    $qry = "INSERT INTO admission (name,email,phone,state,country,program,course) VALUES ('$name','$email','$phone','$state','$country','$program','$course')";
    $run_qry = mysqli_query($con, $qry);

    if($run_qry){
        echo "<script>alert('Registered successfully !');</script>";
        header("location : apply.php");
        exit(0);
    }
    else{
        echo "<script>alert('Failed to register !');</script>";
        header("location : apply.php");
        exit(0);
    }
}

?>