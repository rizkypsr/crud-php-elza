<?php

// Import file config untuk koneksi ke database
include_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != "" && $password != "") {

    session_start();
    $sql_query = "select count(*) as cntUser from users where username='" . $username . "' and password='" . $password . "'";
    $result = mysqli_query($mysqli, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if ($count > 0) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        header("Location:login.php");
    }

}
