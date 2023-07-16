<!-- post.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
    }
}

header("Location: index.php");
?>
