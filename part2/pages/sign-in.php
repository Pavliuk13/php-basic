<?php include('../server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sing-in.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
<form method="post" action="sign-in.php">
    <div class="errors">
        <?php include('../errors.php') ?>
    </div>

    <div class="wrapper">
        <div class="logo">
            <img src="../img/logo-2.png" alt="logo">
        </div>
        <div class="input-list">
            <div class="input-item">
                <label for="user_name">Ім'я користувача</label>
                <input id="user_name" type="text" placeholder="Введіть ім'я користувача" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="example@email.com" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-item">
                <label for="pass">Пароль</label>
                <input id="pass" type="password" placeholder="Введіть пароль" name="password">
                <label class="desc">Забули пароль? Тисніть <a href="#">сюди</a></label>
            </div>
            <div class="buttons">
                <button><a href="../index.php" class="back">Назад</a></button>
                <button type="submit" name="login_user" class="continue">Вхід</button>
            </div>
        </div>
    </div>

</form>
</body>
</html>
