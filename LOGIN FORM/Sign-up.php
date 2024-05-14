<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Sign-up.css">
    <title>Sign Up</title>
</head>
<body>
<section>
  
  <div class="box">
    
    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>
    
   <div class="container"> 
    <div class="form"> 
      <h2>Sign Up to CodePen</h2>
      <form action="">
        <div class="inputBx">
          <input type="text" required="required">
          <span>Full Name</span>
          <i class="fas fa-user"></i>
        </div>
        <div class="inputBx">
          <input type="email" required="required">
          <span>Email</span>
          <i class="fas fa-envelope"></i>
        </div>
        <div class="inputBx password">
          <input id="password-input" type="password" name="password" required="required">
          <span>Password</span>
          <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
          <i class="fas fa-key"></i>
        </div>
        <div class="inputBx password">
          <input id="confirm-password-input" type="password" name="confirm-password" required="required">
          <span>Confirm Password</span>
          <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
          <i class="fas fa-key"></i>
        </div>
        <div class="inputBx">
          <input type="submit" value="Sign Up" disabled> 
        </div>
      </form>
      <p>Already have an account? <a href="Login.php">Log In</a></p>
    </div>
  </div>
    
  </div>
</section>
<script src="../JAVASCRIPT/script.js"></script>
</body>
</html>
