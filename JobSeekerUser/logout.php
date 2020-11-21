<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    echo "You have been logged out!";
    echo "<a href='signup.php'>signup</a>";
}
else {
    header("location: signup.php");
}
?>