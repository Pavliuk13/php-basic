<?php
include('../server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>User page</title>
</head>
<body>
<header>
    <div class="container-d">
        <div class="header-body">
            <a href="#" class="header-logo">
                <img src="../img/logo.png" alt="logo">
            </a>
            <div class="header-burger">
                <span></span>
            </div>
            <nav class="header-menu">
                <ul class="header-list">
                    <li><a href="../index.php" class="header-link">ГОЛОВНА</a></li>
                    <li><a href="./about.php" class="header-link">ПРО НАС</a></li>
                    <li><a href="./courses.php" class="header-link">НАШІ КУРСИ</a></li>
                    <li><a href="
                    <?php if (isset($_SESSION['username'])) : ?>
                    <?php echo "./cart.php"; ?>
                    <?php else : ?>
                    <?php echo "./sign-up.php"; ?>
                    <?php endif; ?>
                    " class="header-link">
                            <?php if (isset($_SESSION['username'])) : ?>
                                <?php echo "<i class=\"fa-solid fa-cart-shopping\"></i>"; ?>
                            <?php else : ?>
                                <?php echo "РЕЄСТРАЦІЯ"; ?>
                            <?php endif; ?>
                        </a></li>
                    <li><a href="
                    <?php if (isset($_SESSION['username'])) : ?>
                    <?php echo "./user.php"; ?>
                    <?php else : ?>
                    <?php echo "./pages/sign-in.php"; ?>
                    <?php endif; ?>
                    " class="header-link">
                            <?php if (isset($_SESSION['username'])) : ?>
                                <?php echo $_SESSION['username']; ?>
                            <?php else : ?>
                                <?php echo "УВІЙТИ"; ?>
                            <?php endif; ?>
                        </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<form>
    <?php include('../errors.php') ?>
    <div class="wrapper">
        <div class="logo">
            <img src="../img/def-user.png" alt="<?php echo $_SESSION['pib']; ?>">
            <h1><?php echo $_SESSION['pib']; ?></h1>
        </div>
        <div class="input-list">
            <div class="input-item">
                <label for="user-name">Прізвище та ім'я</label>
                <input id="user_name" type="text" placeholder="<?php echo $_SESSION['pib']; ?>">
            </div>
            <div class="input-item">
                <label for="user-name">Ім'я користувача</label>
                <input id="user_name" type="text" placeholder="<?php echo $_SESSION['username']; ?>">
            </div>
            <div class="input-item">
                <label for="user-name">Стать</label>
                <input id="user_name" type="text" placeholder="Чоловіча">
            </div>
            <div class="input-item">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="buttons">
                <a href="#" class="back">ЗБЕРЕГТИ</a>
                <a href="../index.php?logout='1'" class="continue">ВИЙТИ</a>
            </div>
        </div>
    </div>

</form>

<footer>
    <div class="container-d">
        <h2>НАШІ ПАРТНЕРИ</h2>
        <div class="logos">
            <img src="../img/epam.png" alt="epam">
            <img src="../img/jetbrains.png" alt="jetbrains">
            <img src="../img/SkillFactory.png" alt="SkillFactory">
            <img src="../img/coursera.png" alt="coursera">
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../scripts/script.js"></script>
<script src="https://kit.fontawesome.com/74fb05f4c1.js" crossorigin="anonymous"></script>
</body>
</html>
