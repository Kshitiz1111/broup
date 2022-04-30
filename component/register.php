<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../style/global.css"><link>
    <link rel="stylesheet" href="../style/register-login.css"><link>
    
    <title>Document</title>
</head>
<body>
    <div>
    <?php include 'nav.php';?>
    </div>
<div class="register">
    <h2>Register</h2>
    <form action="../php/register.php" method="post">
      <div class="username field">
        <input type="text" name="userName" placeholder="username" required>
      </div>
      <div class="name field">
        <input type="text" name="firstName" placeholder="firstname"required>
        <input type="text" name="middelName" placeholder="middelname" >
        <input type="text" name="lastName" placeholder="lastname" required>
      </div>
      <div class="address field">
         <input type="text" name="country" placeholder="country">
         <input type="text" name="city" placeholder="city" >
         <input type="text" name="localAddress" placeholder="local address" >
      </div>
      <div class="contact field">
          <input type="text" name="mobileNumber" placeholder="mobile number">
      </div>
      <div class="password field">
          <div class="inner_field"><input id="pwd" type="password" name="password" placeholder="password" ></div>
          <div class="inner_field"><input id="cPwd" type="password" name="cPassword" placeholder="confirm password" ><span id="toggelPwd" >show</span></div>
      </div>
      <div class="gender field">
        <div><input type="radio" name="gender" required><span>male</span></div>
        <div><input type="radio" name="gender"  required><span>female</span></div>
        <div><input type="radio" name="gender" required><span>other</span></div>
      </div>
     
      <input type="submit" name="submit" value="SUBMIT">
    </form>
  </div>

  <script src="../js/toggelpwd.js"></script>
</body>
</html>