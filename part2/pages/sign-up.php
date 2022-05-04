<?php include('../server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sign-up.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
<form method="post" action="sign-up.php">
    <div class="errors">
        <?php include('../errors.php') ?>
    </div>

    <div class="wrapper">
        <div class="logo">
            <img src="../img/logo-2.png" alt="logo">
        </div>
        <div class="input-list">
            <div class="input-item">
                <label for="name">Прізвище та ім'я</label>
                <input id="name" type="text" placeholder="Введіть текст" name="pib" value="<?php echo $pib; ?>">
            </div>
            <div class="input-item">
                <label for="user-name">Ім'я користувача</label>
                <input id="user_name" type="text" placeholder="Створити ім'я користувача" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="example@email.com" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-item">
                <label for="pass">Пароль</label>
                <input id="pass" type="password" placeholder="Придумайте пароль" name="password_1">
                <label class="desc">Ваш пароль має містити хоча б 1 цифру, а також 1 літеру у верхньому регістрі</label>
            </div>
            <div class="input-item">
                <label for="confirm_pass">Підтвердити пароль</label>
                <input id="confirm_pass" type="password" placeholder="Підтвердіть пароль" name="password_2">
                <label class="desc">Паролі мають співпадати</label>
            </div>
            <div class="buttons">
                <button><a href="../index.php" class="back">Назад</a></button>
                <button name="reg_user" class="continue">Реєстрація</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
