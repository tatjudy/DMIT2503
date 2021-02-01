<?php
require_once('../login/classes/Login.php');

$login = new Login();

if ($login -> isUserLoggedIn() == true) {
    include ("../includes/mysql_connect.php");

    $commentor_id = $_SESSION['user_id'];
}
else {
    header ("Location:../login/index.php");
}
$comment = trim($_POST['comment']);
$blog_id = $_POST['blog_id'];

echo "Commentor: $commentor_id, Comment: $comment, : Blog Post: $blog_id";

if (isset($_POST['submit']) ) {
    mysqli_query($con, "INSERT INTO mucomments (comments, blog_id, commentor_id) VALUES ('$comment','$blog_id', '$commentor_id')") or die(mysqli_error($con));

    //header ("Location: ../index.php");
}

?>