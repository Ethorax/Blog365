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



<?php
      $title = $_POST['title'];
      $body = $_POST['body'];
      $username = $_SESSION['name']
    ?>

        <?php
        $sql = "INSERT INTO `blog_posts` (`id`, `username`, `title`, `body`) VALUES ('0', '$username', '$title', '$body')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
          
          $con->close();
          header('Location: blog.php');
        ?>