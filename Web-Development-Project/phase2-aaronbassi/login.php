<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: create.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/login.css">
	<title>Login</title>
</head>
<body>
<header>
        <nav>
            <br>
            <ul class="main">
                <li><a href="/phase2-aaronbassi/index.php">Home</a></li>
                <li><br><br></li>
                <li><a href="/phase2-aaronbassi/aboutme.php">About me</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/skills.php">Skills & Achievements</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/education.php">Education</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/experience.php">Experience</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/portfolio.php">Portfolio</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/contact.php">Contact</a></li>
                <li><a>|</a></li>
                <li><a href="/phase2-aaronbassi/blog.php">Blog</a></li>
            </ul>
        </nav>
    </header>

	<div id="box">
		<fieldset id="field1">
        <form method="post" id="login">
            <legend id="lgnd1">Login</legend>
                <label class="label1"><b>User Name </b>
                </label>
                <input type="text" name="user_name" id="Uname" placeholder="Enter Username">
                <br><br>
                <label class="label1"><b>Password</b>
                </label>
                <input type="Password" name="password" id="Pass" placeholder="Enter Password">
                <br><br>
                <button input type="submit" id="check"> Login</button>
                <label class="label2"><b><a href="signup.php">Signup Here</a></b>
                </label>
			 
		</form>

        </fieldset>
</body>
</html>
