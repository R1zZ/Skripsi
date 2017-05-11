<?php
  include('regis.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: access.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <i class="fa fa-registered" aria-hidden="true"><title>Register</title></i>
</head>
<body>
<link href=../css/register.css rel='stylesheet' type='text/css'>
<link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet">
<div class="testbox">
  <h1>Registration</h1>

  <form action="/">
      <hr>
    <div class="status">
      <input type="radio" value="Mahasiswa" id="Personal" name="status" checked/>
      <label for="Personal" class="radio" chec>Personal</label>
      <input type="radio" value="perusahaan/admin" id="Company" name="status" />
      <label for="Company" class="radio">Company</label>
        </div>
  <hr>
  <label id="icon" for="name"><i class="fa fa-envelope"></i></label>
  <input type="email" name="email" id="email" placeholder="Email" required/>
  <label id="icon" for="name"><i class="fa fa-user"></i></label>
  <input type="text" name="nama" id="name" placeholder="Name" required/>
  <label id="icon" for="name"><i class="fa fa-users"></i></label>
  <input type="text" name="username" id="username" placeholder="Username" required/>
  <label id="icon" for="name"><i class="fa fa-shield"></i></label>
  <input type="password" name="passwd" id="passwd" placeholder="Password" required/>
  <div class="JK">
    <input type="radio" value="pria" id="male" name="JK" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="wanita" id="female" name="JK" />
    <label for="female" class="radio">Female</label>
   </div> 
   <a href="#" class="button" id="login-button" name="register">Register</a>
  </form>
</div>
    <script src="js/index.js"></script>
</body>
</html>