<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./pages/sign-in.php");
}
?>

<!DOCTYPE html>

<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalebel=0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Courseanta</title>
</head>
<body>
<header>
    <div class="container-d">
        <div class="header-body">
            <a href="#" class="header-logo">
                <img src="./img/logo.png" alt="logo">
            </a>
            <div class="header-burger">
                <span></span>
            </div>
            <nav class="header-menu">
                <ul class="header-list">
                    <li><a href="./index.php" class="header-link">ГОЛОВНА</a></li>
                    <li><a href="./pages/about.php" class="header-link">ПРО НАС</a></li>
                    <li><a href="./pages/courses.php" class="header-link">НАШІ КУРСИ</a></li>
                    <li><a href="
                    <?php if (isset($_SESSION['username'])) : ?>
                    <?php echo "./pages/cart.php"; ?>
                    <?php else : ?>
                    <?php echo "./pages/sign-up.php"; ?>
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
                    <?php echo "./pages/user.php"; ?>
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

<div class="welcome">
    <div class="image">
        <img src="./img/girl.jpg" alt="girl">
    </div>
    <div class="container-d">
        <h2>COURSEANTA?</h2>
        <p>
            COURSEANTA – це крута платформа, на якій ви можете почати свій шлях в ІТ або покращувати свої навички. ІТ-сектор розвивається швидкими темпами. Кожен день багато людей, незалежно від віку і статі, вирішують спробувати себе в цій сфері. На жаль, не всі можуть зрозуміти навіть здавалося б елементарних речей. Тому наша команда вирішила створити велику платформу з курсами по програмуванню. Тут ви можете знайти курси з найбільш актуальними мовами програмування та відповідно до вашого рівня знань. Якщо ви новачок у цій галузі, наші курси допоможуть вам розвинути свої навички до рівня Junior-розробника.
            Крім того, наші курси мають досить низьку ціну в порівнянні з іншими великими платформами з курсами. Але якість нашого інформаційного наповнення не поступається дорогим курсам, а в деяких показниках навіть краще. Тож не гайте часу, а краще натисніть кнопку нижче та виберіть те, що буде вам цікаво.
        </p>

        <a href="./pages/courses.php" class="btn">ВІДКРИТИ КУРСИ</a>
    </div>
</div>

<div class="container-d">
    <div class="testimonials">
        <h2>Відгуки</h2>
        <div class="wrapper">
            <div class="left">
                <img src="./img/left.png" alt="left">
            </div>
            <div class="testimonials-item first">
                <p class="image"><img src="./img/pyatov.png" alt="pyatov"></p>
                <h1 class="user-name">Андрій Пятов</h1>
                <p class="comment">Lorem    ipsum    dolor    sit    amet, consectetur adipiscing elit, sed do eiusmod    tempor    incididunt    ut labore et dolore magna  aliqua.  Ut enim    ad    minim    veniam,    quis nostrud      exercitation       ullamco laboris    nisi    ut    aliquip    ex   ea commodo  consequat.   Duis   aute irure    dolor   in   reprehenderit   in voluptate  velit  esse  cillum dolore eu fugiat nulla pariatur.  Excepteur sint     occaecat     cupidatat     non proident,  sunt  in  culpa qui officia deserunt    mollit    anim    id     est laborum.</p>
            </div>
            <div class="right">
                <img src="./img/right.png" alt="right">
            </div>
            <div class="testimonials-item second">
                <p class="image"><img src="./img/mudryk.png" alt="mudryk"></p>
                <h1 class="user-name">Михайло Мудрик</h1>
                <p class="comment">Lorem    ipsum    dolor    sit    amet, consectetur adipiscing elit, sed do eiusmod    tempor    incididunt    ut labore et dolore magna  aliqua.  Ut enim    ad    minim    veniam,    quis nostrud      exercitation       ullamco laboris    nisi    ut    aliquip    ex   ea commodo  consequat.   Duis   aute irure    dolor   in   reprehenderit   in voluptate  velit  esse  cillum dolore eu fugiat nulla pariatur.  Excepteur sint     occaecat     cupidatat     non proident,  sunt  in  culpa qui officia deserunt    mollit    anim    id     est laborum.</p>
            </div>
            <div class="testimonials-item third">
                <p class="image"><img src="./img/sedan.png" alt="sedan"></p>
                <h1 class="user-name">Влада Седан</h1>
                <p class="comment">Lorem    ipsum    dolor    sit    amet, consectetur adipiscing elit, sed do eiusmod    tempor    incididunt    ut labore et dolore magna  aliqua.  Ut enim    ad    minim    veniam,    quis nostrud      exercitation       ullamco laboris    nisi    ut    aliquip    ex   ea commodo  consequat.   Duis   aute irure    dolor   in   reprehenderit   in voluptate  velit  esse  cillum dolore eu fugiat nulla pariatur.  Excepteur sint     occaecat     cupidatat     non proident,  sunt  in  culpa qui officia deserunt    mollit    anim    id     est laborum.</p>
            </div>
            <div class="testimonials-item fourth">
                <p class="image"><img src="./img/dorofeeva.png" alt="dorofeeva"></p>
                <h1 class="user-name">Надя Дорофєєва</h1>
                <p class="comment">Lorem    ipsum    dolor    sit    amet, consectetur adipiscing elit, sed do eiusmod    tempor    incididunt    ut labore et dolore magna  aliqua.  Ut enim    ad    minim    veniam,    quis nostrud      exercitation       ullamco laboris    nisi    ut    aliquip    ex   ea commodo  consequat.   Duis   aute irure    dolor   in   reprehenderit   in voluptate  velit  esse  cillum dolore eu fugiat nulla pariatur.  Excepteur sint     occaecat     cupidatat     non proident,  sunt  in  culpa qui officia deserunt    mollit    anim    id     est laborum.</p>
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div class="why-people-choose">
        <h2>Чому люди обирають нас?</h2>
        <div class="block">
            <div class="facts">
                <div class="fact">
                    <img src="./img/one.png" alt="1">
                    <h1>Актуальна інформація</h1>
                </div>
                <div class="fact">
                    <img src="./img/two.png" alt="2">
                    <h1>Низька ціна</h1>
                </div>
                <div class="fact">
                    <img src="./img/three.png" alt="3">
                    <h1>Круті викладачі</h1>
                </div>
                <div class="fact">
                    <img src="./img/four.png" alt="4">
                    <h1>Сертифікат про завершення курсів</h1>
                </div>
            </div>
            <div class="image">
                <img src="./img/graphic.png" alt="line">
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div class="program">
        <h2>Як проходить навчання?</h2>
        <div class="plan">
            <div class="element">
                <div class="image">
                    <img src="./img/online.png" alt="online">
                </div>
                <h1>онлайн</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="element">
                <div class="image">
                    <img src="./img/theory.png" alt="theory">
                </div>

                <h1>теорія</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="element">
                <div class="image">
                    <img src="./img/practice.png" alt="practice">
                </div>

                <h1>практика</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="element">
                <div class="image">
                    <img src="./img/project.png" alt="project">
                </div>

                <h1>проект</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div class="form">
        <h2>Залишилися ще питання?</h2>
        <div class="actions">
            <div class="inputs">
                <div class="name">
                    <input type="text" placeholder="ім'я">
                </div>
                <div class="name">
                    <input type="text" placeholder="прізвище">
                </div>
                <div class="name">
                    <input type="text" placeholder="email">
                </div>
                <div class="button first">
                    <a href="#">ВІДПРАВИТИ</a>
                </div>
            </div>

            <textarea placeholder="Текстове поле"></textarea>

            <div class="button second">
                <a href="#">ВІДПРАВИТИ</a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-d">
        <h2>НАШІ ПАРТНЕРИ</h2>
        <div class="logos">
            <img src="./img/epam.png" alt="epam">
            <img src="./img/jetbrains.png" alt="jetbrains">
            <img src="./img/SkillFactory.png" alt="SkillFactory">
            <img src="./img/coursera.png" alt="coursera">
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./scripts/script.js"></script>
<script src="https://kit.fontawesome.com/74fb05f4c1.js" crossorigin="anonymous"></script>
</body>
</html>
