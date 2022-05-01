<html>
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="images/coffee.jpg">

    </head>
<body>
<div id="leftside">
<div id="leftside">
        <ul>
            <a href="index.html">
                <li class="button">Home</li>
            </a>
            <a href="blog.php">
                <li class="button">Blog</li>
            </a>
            <a href="aboutus.html">
                <li class="button">About</li>
            </a>
            <a href="login.php">
                <li class="button">Log In</li>
            </a>
            <a href="registration.html">
                <li class="button">Register</li>
            </a>
            <a href="newBlogPost.php">
                <li class="button">New Post</li>
            </a>
            <a href="logout.php">
                <li class="button">Logout</li>
            </a>
        </ul>
    </div>
</body>

<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "blog";
    
    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    echo "<p>This is my password: ".$password."</p>";
    $sql = "INSERT INTO `accounts` (`username`, `password`, `email`)
    VALUES ('$username', '$password', '$email')";
    mysqli_query($conn, $sql);
    
    
    $conn->close();
    header('Location: login.php');
    ?>
</html>