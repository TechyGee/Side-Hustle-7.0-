<?php 

require "db_conn.php";

if(isset($_POST['save_user'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];


    if($pass !== $confirm_pass) {

        exit ("<p>password not matched</p><a href='register.php'>Go back</a>");
    }

    $user_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($user_exist) > 0 ) {

        exit("</p>User already exist</p><a href='register.php'>Go back</a>");
    }

    $encrypt_pass = md5($pass);


    $insert_user = mysqli_query($db_connect, "INSERT INTO users(firstName, lastName, username, email, gender, pass) VALUE('$fname', '$lname', '$username', '$email', '$gender', '$encrypt_pass')");

    if($insert_user) {

        header("Location: users.php");
    }
}
