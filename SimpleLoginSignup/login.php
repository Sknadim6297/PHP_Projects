<?php
include 'connection.php';

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];

    $sql="SELECT * FROM `users` WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        
        if(password_verify($pass,$row['password'])){
            $_SESSION['username']=$row['username'];
            echo "<script>alert('Login Successful')</script>";
            header('location:Home.php');
        }else{
            echo "<script>alert('Invalid Password')</script>";
        }
}
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div class="flex items-center justify-center min-h-screen bg-background">
  <div class="bg-card shadow-lg rounded-lg p-8 max-w-md w-full">
    <h2 class="text-2xl font-bold text-primary text-center mb-6">Login</h2>
    <form class="space-y-4" action=""  method="post">
      <div>
        <label for="email" class="block text-sm font-medium text-primary">Email</label>
        <input type="email" id="email" name="email" class="w-full px-3 py-2 rounded-lg border focus:outline-none focus:ring focus:ring-primary" placeholder="john.doe@example.com" required />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-primary">Password</label>
        <input type="password" id="password" name="pass" class="w-full px-3 py-2 rounded-lg border focus:outline-none focus:ring focus:ring-primary" placeholder="Enter your password" required />
      </div>
      <button type="submit" class="w-full bg-black text-white py-2 rounded-lg" name="login">Login</button>
    </form>
    <div class="flex gap-2 mt-4">
      You don't have an account?
    <a href="register.php" class="text-red-600 font-bold">Register </a>
    </div>
  </div>
</div>
   
</body>

</html>