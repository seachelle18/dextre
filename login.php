<?php

session_start();
$servername = 'localhost';
$database = 'quiz';
$usrnm = 'root';
$password = 'annyeong471';

// Create connection

$conn = mysqli_connect($servername, $usrnm, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $eml = $_POST['email'];
    $pwd = $_POST['pass'];
    $insert = "INSERT INTO user values ('$eml', '$pwd')";
    $ins = $conn->query($insert);
    $_SESSION['username'] = $_POST['email'];
    header('location:quiz.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <link rel="stylesheet" href="inc/login.css">

</head>
<body>

<?php 
if(isset($message)){
    foreach($message as $message){
       echo '
       <div class="message">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
       </div>
       ';
    }
 }
?>
    
<section class="form-container">
    <form action="" enctype="multipart/form-data" method="POST">
        <h3>Login Now</h3>
        <input type="email" name="email" class="box" placeholder="Enter your email" required>
        <input type="password" name="pass" class="box" placeholder="Enter your password" required>
        <input type="submit" value="login now" class="btn" name="submit">

    </form>
</section>


</body>
</html>