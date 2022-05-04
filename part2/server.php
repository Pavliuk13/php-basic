<?php
session_start();

$pib = "";
$username = "";
$email	  = "";
$errors   = array();

$db = mysqli_connect('localhost', 'root', '', 'courseanta');

if (isset($_POST['reg_user'])) {
    $pib        = mysqli_real_escape_string($db, $_POST['pib']);
    $username   = mysqli_real_escape_string($db, $_POST['username']);
    $email	    = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // checking filled
    if (empty($pib)) {
        array_push($errors, "-Прізвище та ім'я є обов'язковими");
    }

    if (empty($username)) {
        array_push($errors, "-Username є обов'язковим полем");
    }

    if (empty($email)) {
        array_push($errors, "-Email є обов'язковим полем");
    }

    if ($password_1 != $password_2) {
        array_push ($errors, "-Паролі повинні співпадати");
    }

    if (empty($password_1)) {
        array_push($errors, "-Пароль є обов'язковим полем");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    // Checking user in database
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Такий користувач вже існує");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email вже існує");
        }
    }

    // Insert New Data
    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (pib, username, email, password) VALUES ('$pib', '$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['pib'] = $pib;
        $_SESSION['email'] = $email;
        $_SESSION['success']  = "You're now logged in";
        header('location: ../index.php');
    }
}

// Click Login
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Ім'я користувача є обов'язковим");
    }

    if (empty($email)) {
        array_push($errors, "Email є обов'язковим");
    }

    if (empty($password)) {
        array_push($errors, "Пароль є обов'язковим");
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND email = '$email'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $query2 = "SELECT pib FROM users WHERE username='$username' AND password='$password' AND email = '$email'";
            $result = mysqli_query($db, $query2);
            $row = $result->fetch_assoc();
            $_SESSION['pib'] = $row['pib'];
            $_SESSION['email'] = $email;
            $_SESSION['success']  = "You are now logged in";
            header('location: ../index.php');
        } else {
            array_push($errors, "Дані не відповідають жодному запису в базі користувачів");
        }
    }
}

?>