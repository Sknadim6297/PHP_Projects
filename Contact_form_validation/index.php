<?php
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['sub'];
    $message=$_POST['message'];

    $error=[];

  if(empty($name)){
      $error['name']="Name is required";
  }
    if(empty($email)){
        $error['email']="Email is required";
    }
    if(empty($subject)){
        $error['sub']="Subject is required";
    }
    if(empty($message)){
        $error['message']="Message is required";
    }


    $to='sknadimsk8509@gmail.com';
    $from= "From".$email;
    $subject="Subject".$subject;
    
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    mail($to,$from,$subject,$body);

    if (mail($to, $subjectLine, $body, $from)) {
        echo "<p class='text-success'>Your message has been sent successfully!</p>";
    } else {
        echo "<p class='text-danger'>There was an error sending your message.</p>";
    }
}
 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Contact form    </h1>
    <div class="container d-flex justify-content-center mt-5">
    <form class="w-50" method="post">
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php
    if(isset($name)){
        echo $name;
    }
    
    ?>">
    <span class="text-danger fw-bold">
    <?php
    if(isset($error['name'])){
        echo $error['name'];
    }
    ?>
    </span>
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control " name="email" placeholder="Enter your Email"  value="<?php
    if(isset($email)){
        echo $email;
    }
    
    ?>">
    <span class="text-danger fw-bold">
    <?php
    if(isset($error['email'])){
        echo $error['email'];
    }
    ?>
    </span>
  </div>
  <div class="mb-3">
    <label class="form-label">Subject</label>
    <input type="text" class="form-control" name="sub" placeholder="Subject"  value="<?php
    if(isset($subject)){
        echo $subject;
    }
    
    ?>">
    <span class="text-danger fw-bold">
    <?php
    if(isset($error['sub'])){
        echo $error['sub'];
    }
    ?>
    </span>
  </div>
  <div class="mb-3">
    <label class="form-label">Message</label>
     <textarea name="message" id="" class=" form-control w-100" placeholder="Enter your message"  value="<?php
    if(isset($message)){
        echo $message;
    }
    
    ?>"></textarea>
     <span class="text-danger fw-bold">
    <?php
    if(isset($error['message'])){
        echo $error['message'];
    }
    ?>
    </span>
  </div>
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>