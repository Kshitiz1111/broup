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
    <h2>Login</h2>
        <form action="../php/login.php" method="post">
      <div class="username field">
        <input type="text" name="userName" placeholder="username" required>
      </div>
      <div class="password field">
          <div class="inner_field"><input id="pwd" type="password" name="password" placeholder="password" ><span id="toggelPwd">show</span></div>
      </div>
      <input type="submit" name="login" value="LOGIN">
    </form>
  </div>

  <script src="../js/toggelpwd.js"></script>
</body>
</html>