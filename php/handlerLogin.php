<?php
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mysqli = new mysqli('localhost', 'root', '', 'blog0404');
    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
    if($result->num_rows){
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['pass'])){
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            echo "success";
        }else{
            echo "error";
        }
    }else{
        echo "error";
    }