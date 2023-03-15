<?php   
    session_start();  
    include("connection.php");
    include("functions.php");
    $user_data=check_login($con); 
 ?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Blog</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/webiste_addpost.css">
   
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
                <li><a>|</a></li>
                <li><a><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <hgroup>
            <p id="header1">
                Create a Blog Post
                <hr id="hr1">
            </p>
        </hgroup>
    </section>
   
    <fieldset id="field2">
        <div>
            <form id="addpost" method="post" action="addblog.php">
                <legend id="lgnd2">Add blog</legend>
                <input required type="text"  name="title" id="title" placeholder="Title" >
                <br><br>
                <textarea required name="content" id="entry" placeholder="Enter your text here"></textarea>
                <br><br>
                <button type="submit" id="checks" name="new_post" > Submit</button>
                <button id="clear" > Clear</button>
            </form>
        </div>
    </fieldset>

    <script src="assets/js/checkform.js"></script>
  
</body>
</html>