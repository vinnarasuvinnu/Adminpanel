<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'> 
 <style>
 .back {
  font-size: 120%;
  
 /* background-image: url("img/b1.gif");*/
 
 background-image:  linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(226,226,226,0.42) 0%, rgba(209,209,209,0.42) 43%);
  height: 100%;
    width: 100%;
    position:absolute;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.header {
  width: 20%;
  margin: 50px auto 0px;
  /*color: #17202A;*/
 background: #FFFAFA;
  text-align: center;
  border: 1px solid #17202A;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;

}
.btn {
  padding: 10px;
  font-size: 15px;
 /* color: #17202A;*/
  background: #808080 ;
  border: none;
  border-radius: 5px;
  color:#FFFAFA;


}
form, .content {
  width: 20%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #17202A;
  background: #FFFAFA;
  border-radius: 0px 0px 10px 10px;
}
h2
{
  color: #17202A;
 font-family: 'Sans-serif ';font-size: 28px;
   }
</style>

</head>
<body>
  <div class="back">
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php" align="center">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group">
  	
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>