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

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/login.css">
<head>
	<title>Signup</title>
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
            <legend id="lgnd1">Register</legend>
                <label class="label1"><b>User Name </b>
                </label>
                <input type="text" name="user_name" id="Uname" placeholder="Enter Username">
                <br><br>
                <label class="label1"><b>Password</b>
                </label>
                <input type="Password" name="password" id="Pass" placeholder="Enter Password">
                <br><br>
                <button input type="submit" id="check"> Sign Up</button>
                <label class="label2"><b><a href="login.php">Click To login</a></b>
                </label>
			 
		</form>

        </fieldset>
		
	</div>
</body>
</html>