<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","blog");  
 
 $sql = "SELECT * FROM blog_data";
 $result = mysqli_query($conn, $sql);
 $conn->close();
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
    <link rel="stylesheet" href="assets/css/website_blog.css">
   
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
                <li><a><a href="create.php">Add Post</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <hgroup>
            <p id="header1">
                Blog
                <hr id="hr1">
            </p>
        </hgroup>
    </section>
   
 
    <?php
        while($blogInfo = $result->fetch_assoc())
        {
            
            ?>
            <h3 class="blog-date">Date Posted: <?php echo $blogInfo['date'];?></h3>
            <h1 class="blog-title"><?php echo $blogInfo['title'];?></h2>
            <h4 class="blog-content"><?php echo $blogInfo['content'];?></h3>
            <hr>
            <br>
            <?php
        }
    ?>
   
   <footer>
        <br><br><br><br>
        <p id="FooterText">Aaron Bassi 2022 © </p>
        <br><br><br>
    </footer>




  

</body>
</html>