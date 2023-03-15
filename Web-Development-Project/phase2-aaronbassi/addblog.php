<?php
    include("connection.php");

    $sql = "SELECT * FROM blog_data";
    $query = mysqli_query($con, $sql); 

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];


        $sql = "INSERT INTO blog_data(title, content) VALUES('$title', '$content')";
        mysqli_query($con, $sql);

        echo $sql;

        header("Location: blog.php?info=added");
        exit();
    }
