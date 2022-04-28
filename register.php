<html>
<head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div id="leftside">
        <ul>
            <a href="index.html">
                <li>Home</li>
            </a>
            <a href="blog.php">
                <li>Blog</li>
            </a>
            <a href="aboutus.html">
                <li>About</li>
            </a>
            <a href="login.php" id="login-button">
                <button>Log In</button>
            </a>
            <a href="registration.html">
                <button>Register</button>
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