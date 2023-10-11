<?php
include 'mysql.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'root' && $password === '123') {
        $_SESSION['username'] = $username;
        insererDonnees('username', $_SESSION['username']);
        header("Location:accueil.php");
    } else {
        header("Location: index.php?error=1");
    }
} else {
    header("Location: index.php");
}
?>

