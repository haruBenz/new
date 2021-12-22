<?php 
    session_start();
    include('Dbconnects.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                // $_SESSION['success'] = "Your are now logged in";
                header("location: insertForm.php");
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }

?>