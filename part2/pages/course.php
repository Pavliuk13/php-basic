<?php include('../server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/course.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>C#</title>
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
                    <?php echo "./sign-in.php"; ?>
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

<div class="container-d">
    <div class="course">
        <div class="header">
            <div class="data">
                <h1>
                    Основи програмування на мові С#
                </h1>
                <div class="author">
                    Автор: VP Junior
                </div>
                <div class="date">
                    Дата виходу: 10.01.2022
                </div>
            </div>
            <div class="price">
                10$
            </div>
        </div>
        <div class="about">
            <div class="actions">
                <div class="image">
                    <img src="../img/c-1.png" alt="C#">
                </div>
                <button><a href="./cart.php">ДОДАТИ В КОШИК</a></button>
                <button><a href="./courses.php">НАЗАД ДО КУРСІВ</a></button>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet volutpat aliquet. Pellentesque non purus porta, bibendum sapien nec, elementum risus. Nunc porttitor ante nec porttitor fermentum. Nam sem turpis, fringilla quis lectus id, sagittis aliquet ante. Suspendisse rutrum dictum mollis. Phasellus non orci ac sapien egestas vestibulum. Sed ac metus blandit, posuere est non, malesuada ipsum. Cras semper massa eu ornare ultricies. Aenean vestibulum dui commodo ligula sollicitudin porttitor. Vestibulum finibus, tortor a condimentum gravida, turpis erat imperdiet magna, et pulvinar est risus interdum metus. Maecenas pretium congue est, sed euismod arcu efficitur in. Ut mollis ipsum quis lectus interdum, in tristique purus feugiat.
                Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti.
                Fusce nec diam sollicitudin, elementum erat in, tempor est. Etiam pellentesque nibh vel mollis fringilla. Mauris sed semper mi, vel commodo urna. Aliquam pretium purus hendrerit bibendum dignissim. Vestibulum accumsan eros ut sapien porttitor, ac tincidunt arcu iaculis. Cras et justo dapibus dui gravida sagittis. Quisque at aliquet nulla. In dolor nunc, feugiat eget viverra et, varius ac velit. Suspendisse eu eleifend magna, non tempus lectus. Ut nisl libero, congue in porttitor eget, efficitur ut dolor. Duis quis lectus massa. Aliquam sed nulla imperdiet, auctor est vitae, bibendum odio. Duis sagittis dictum nibh eu vehicula.
            </p>
        </div>
        <h2>ВІДГУКИ</h2>
        <div class="testimonials">
            <div class="item">
                <div class="user">
                    <div class="image">
                        <img src="../img/pyatov.png" alt="Pyatov">
                    </div>
                    <div class="name">
                        <a href="./user.php">Андрій Пятов</a>
                    </div>
                </div>
                <p>
                    Curabitur sed augue laoreet metus luctus egestas. Donec id lacus euismod, ullamcorper justo porta, placerat enim. Suspendisse sit amet consequat nunc. Nulla vel pulvinar neque, in viverra turpis. Pellentesque nunc orci, dapibus id lobortis id, volutpat vitae arcu. Curabitur in ex ligula. Praesent eu elementum odio. Donec tincidunt quam sit amet malesuada elementum. Quisque posuere mattis elementum. Nulla facilisi. Ut lacinia arcu tortor, a fringilla lectus finibus ac. Vestibulum efficitur scelerisque orci, sed ullamcorper velit varius et. Cras vitae condimentum lacus.
                </p>
                <div class="date">
                    13.04.2022, 5:44 PM
                </div>
            </div>
            <div class="item">
                <div class="user">
                    <div class="image">
                        <img src="../img/sedan.png" alt="Sedan">
                    </div>
                    <div class="name">
                        <a href="#">Влада Седан</a>
                    </div>
                </div>
                <p>
                    Curabitur sed augue laoreet metus luctus egestas. Donec id lacus euismod, ullamcorper justo porta, placerat enim. Suspendisse sit amet consequat nunc. Nulla vel pulvinar neque, in viverra turpis. Pellentesque nunc orci, dapibus id lobortis id, volutpat vitae arcu. Curabitur in ex ligula. Praesent eu elementum odio. Donec tincidunt quam sit amet malesuada elementum. Quisque posuere mattis elementum. Nulla facilisi. Ut lacinia arcu tortor, a fringilla lectus finibus ac. Vestibulum efficitur scelerisque orci, sed ullamcorper velit varius et. Cras vitae condimentum lacus.
                </p>
                <div class="date">
                    21.03.2022, 10:44 AM
                </div>
            </div>
        </div>
    </div>

</div>

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
