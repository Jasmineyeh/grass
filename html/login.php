<!DOCTYPE html>
<html>
<title>小草書屋</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
  <head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
     <link rel="stylesheet" type="text/css" href="註冊.css">
</head>
 <body  >
  <DIV class="header">
    <h2>Login</h2>
  </DIV>

  <form method="POST" action="login.php">
    <div class="input-group">
      <label>帳號</label>
      <input type="text" name="username">
    </div>
      
        <div class="input-group">
      <label>密碼</label>
      <input type="password" name="password_1">
    </div>

        <div class="input-group">
           <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
      Not yet a member?<a href="register.php">sign up</a>
    </p>
  </form>
</body>
</html>