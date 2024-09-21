<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    $error=[];

    if(empty($name)){
        $error[]="Name is required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[]="Please enter vaild email";
    }
    if(strlen($message) < 10 ){
        $error[]="Message must be at least 10 characters";
    }
    if (empty($error)) {
        echo "<script>alert('Form submitted successfully');</script>";
        echo "Thank you for contacting us, $name. We will get back to you shortly.";

    } else {
        foreach ($error as $error) {
            echo "<script>alert('$error');</script>";
        }
}
}
 
?>