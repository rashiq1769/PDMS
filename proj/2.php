<?php
	session_start();
	require_once('config.php');

?>
<!DOCTYPE html>
<html>
<body background="image.jpg">
<head>
    <title> Register form</title>
    <script type="text/javascript">
        function test_str() {
            var res;
            var str =
                document.getElementById("t1").value;
            if (str.match(/[a-z]/g) && str.match(
                    /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                    /[^a-zA-Z\d]/g) && str.length >= 8)
                res = "TRUE";
            else
                res = "FALSE";
            document.getElementById("t2").value = res;

        }
    </script>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="2.php" method="post">
              <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username" id="t1" required="">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email" required="">
                
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" id="t2" required="">
                <p>Re-Enter Password</p>
                <input type="password" name="cpassword" placeholder="Enter Password Again" required="">
								
                <input type="submit" name="register" value="Create Account">
                <a href="1.php">Login now</a><br>
            </form>
            <?php
  			if(isset($_POST['register']))
  			{
  				@$username=$_POST['username'];

  				@$email=$_POST['email'];
  				@$password=md5($_POST['password']);
  				@$cpassword=md5($_POST['cpassword']);




  				if($password==$cpassword)
  				{
  					$query = "select * from userinfotable where username='$username'";

  				$query_run = mysqli_query($con,$query);

  				if($query_run)
  					{
  						if(mysqli_num_rows($query_run)>0)
  						{
  							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
  						}
  						else
  						{
  							$query = "insert into userinfotable values('$username','$password','$email')";
  							$query_run = mysqli_query($con,$query);
  							if($query_run)
  							{
  								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
  								$_SESSION['username'] = $username;
  								$_SESSION['password'] = $password;
  								header( "Location: 1.php");
  							}
  							else
  							{
  								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
  							}
  						}
  					}
  					else
  					{
  						echo '<script type="text/javascript">alert("DB error")</script>';
  					}
  				}
  				else
  				{
  					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
  				}

  			}
  			else
  			{
  			}
  		?>


        </div>

    </body>
    </head>
</html>
