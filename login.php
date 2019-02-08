<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<!DOCTYPE HTML>
<html lang="en_US">
   <head>
      <meta charset="UTF-8">
       <title>Admin Login</title>
<style>
    form {
    border: 3px solid #f1f1f1;
   
     }
  
      input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
 
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
 
button:hover {
    opacity: 0.8;
}
 
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


 
.container {
    padding: 16px;
}
 
span.psw {
    float: right;
    padding-top: 16px;
}
 
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
   <body> 
       <h2 style="text-align: center">Login Form</h2>
     <form action="login.php" method="post">
          
        
         
         
          <div class="imgcontainer">

  </div>
 
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
 
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
         
    <button type="submit" name="login" value="Login">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
 
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="pass">Forgot <a href="#">password?</a></span>
  </div>
    </form>
   </body>
</html>
<?php
include("dbcon.php");
if(isset($_POST['login']))
{
    $username =$_POST['uname'];
    $password =$_POST['pass'];
      $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
      $run=mysqli_query($con,$qry);
    $row= mysqli_num_rows($run);
      if($row<1)
      {  
           ?>
          <script> 
               alert('Username or Password not match !!');
               window.open('login.php','_self');
          </script>
        <?php
      }
      else
      {
          $data = mysqli_fetch_assoc($run);
          $id = $data['id'];
          echo "id = ".$id;
          
          session_start();
          
          $_SESSION['uid']=$id;
          header('location:admin/admindash.php');
      }
}
?>







