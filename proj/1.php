<?php
	session_start();
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<body background="image.jpg">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="1.php" method="post">
              <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required="">

            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="">

            <input type="submit" name="login" value="Login">


            <a href="2.php">Don't have an account?</a>
            </form>
						<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=md5($_POST['password']);
				$query = "select * from userinfotable where username='$username' and password='$password' ";

				$query_run = mysqli_query($con,$query);

				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;

					header( "Location: 3.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
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
