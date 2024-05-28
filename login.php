<?php 
session_start();
include("assets/database.php");
if(isset(($_POST['login']))){
  $username = $_POST['login'];
  $password = $_POST['password'];
  $query = 'select * from admin query username =$usernama';
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    $password = $row['password'];
  
    

  
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="assets/login.css">
  <title>Login Form</title>
</head>
<body>
  <div class="login-container">
    <form action="../../" method="post">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required autocomplete="on">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required autocomplete="on">
      <button type="submit" name="login">Login</button>
    
    </form>
  </div>
</body>
</html>