<!DOCTYPE html>
<html>
<head>
<title> Login</title>
</head>
<body>

<h2>Login Form</h2>

<form action="index.php" method="post">

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw" required>
        
    <button type="submit" onclick="login()">Login</button>
   
      

</form>
<script type="text/javascript">
  function login() {
    var Username= document.getElementById('uname').value;
    var Password= document.getElementById('psw').value;
    if(Username=="sraaz@gmail.com"&&Password=="1st15cs719")
    {
      alert("login  Successfull");
          }
          else{
           alert("Incorrect  Username or Password"); 
           event.preventDefault();
    
  }
  }
</script>
</body>
</html>
