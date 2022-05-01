<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
    <Title>Log In</Title>
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
            <a href="logout.php"><li class="button">Logout</li></a>
        </ul>
    </div>

<body>
    <div id="mainbody">
		<h1 id="postheader">LOGIN</h1>
		<form method="POST" action="authenticate.php">
			<input type="text" placeholder="Username" name="username" class="text" autocomplete="off" required><br/><br/>
			<input type="password" placeholder="Password" name="password" class="text" required><br/><br/>
			<input type="Submit" name="submit" id="sub">
		</form>
	</div>
</body>

</html>