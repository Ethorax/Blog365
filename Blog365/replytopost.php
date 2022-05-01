<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: Login.html');
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


<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
    <Title>blog</Title>
    <link rel="icon" href="images/coffee.jpg">
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
</head>
<body>
<div id="mainbody">
<?php
    $sql = mysqli_query($con, "SELECT * FROM blog_posts WHERE id = $_GET[postID]");
    if(mysqli_num_rows($sql) > 0){
    }


?>



<?php
$i=0;
while($row = mysqli_fetch_array($sql)){

    ?>
    <div id="blogpost">
   
    <p><span style="font-size:32pt;"><?php echo $row["title"]?></span><br/><br/><?php echo $row["body"]?><br/><br/><span style="font-size:18px;"><?php echo $row["username"]?></span><br/></p>
</div>
    <?php
    $i++;
}
?>
</table>

<?php
    $sql = mysqli_query($con, "SELECT * FROM blog_comments WHERE postID = $_GET[postID]");
    if(mysqli_num_rows($sql) > 0){
    }
?>


    

<?php
$i=0;


while($row = mysqli_fetch_array($sql)){

    ?>

    <div class="blogcomment">
   <p class="post"><?php echo $row["body"]?><br/><span style="font-size:18px;"><?php echo $row["username"]?></span><br/></p>
</div>
    <?php
    $i++;
}
?>
</table>
<?php
    $postID = $_GET['postID'];
    ?>
<form method="post" action="replyHandler.php?postID=<?php echo $postID?>" id="replyCreation">
    <textarea name="body" cols="50" rows="8"></textarea><br/>
    <input id="submit" type="submit" value="Submit comment" />
</form>
</div>
    </body>
</html>