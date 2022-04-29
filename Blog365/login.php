<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css" type="text/css">
    <Title>HayStackOverflow Log In</Title>
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
        </ul>
    </div>

<body>
    <div id="main">
		<h1>SIMPLE LOGIN</h1>
		<form method="POST" action="authenticate.php">
			Username <input type="text" name="username" class="text" autocomplete="off" required>
			Password <input type="password" name="password" class="text" required>
			<input type="Submit" name="submit" id="sub">
		</form>
	</div>
</body>

</html>