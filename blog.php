<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
        exit;
    }

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'blog';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>


<!DOCTYPE html>
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
            <a href="login.php">
                <li>Log In</li>
            </a>
            <a href="registration.html">
                <li>Register</li>
            </a>
            <a href="newBlogPost.php">
                <li>New Post</li>
            </a>
        </ul>
    </div>
    <div id="mainbody">
        <h1 class="pagetitle">Blog</h1>
        <img src="">
    

    <?php
    $sql = mysqli_query($con, "SELECT * FROM blog_posts");
    if(mysqli_num_rows($sql) > 0){
?>

<table>
    <tr>
        <td>User</td>
        <td>Title</td>
        <td>Body</td>
    </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($sql)){
    $post_id = $row["id"];

    ?>

    <tr>
        <td><?php echo $row["username"]; ?></td>
        <td><a href="replytopost.php?post_id=<?php echo $post_id?>"><?php echo $row["title"]; ?></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["body"] ?></td>
    </tr>
    <?php
    $i++;
}
?>
</table>
    <?php
}
else{
    echo "No Posts Available";
}
?>
</div>
</body>

</html>