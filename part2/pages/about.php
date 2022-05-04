<?php include('../server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>About Us</title>
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
                    <li><a href="./courses.php?posts" class="header-link">НАШІ КУРСИ</a></li>
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
    <h1>
        Наша головна мета - показати, що програмувати просто
    </h1>

    <div class="line"></div>

    <div class="thesis">
        <div class="image">
            <img src="../img/me.png" alt="Vasiliy Pavliuk">
        </div>
        <div class="sign">
            <img src="../img/new-one.png" alt="img">
        </div>
        <div class="text">
            “Коли я починав вивчати програмування, поруч не було нікого, хто міг би направити мене в правильну сторону, розповісти про те, що мені цікаво, простими словами. В інтернеті завжди є інформація. Але неможливо вивчити програмування за допомогою відеоуроків на прикладі “JavaScript за 1 годину”. Тому я вирішив, що зроблю платформу, де зможу допомогти людям, які дійсно бажають стати програмістами, обрати правильну дорогу. Саме так з’явилася “Courseanta” - найпопулярніша платформа з онлайн-курсамиТому я закликаю всіх не зволікати і приєднуватися до наших курсів. Йдемо у світ ІТ разом !”<br><br>
            <span>Василь Павлюк, CEO “Courseanta”</span>
        </div>
        <div class="sign-second">
            <img src="../img/new-one.png" alt="img">
        </div>
    </div>

    <div class="line"></div>

    <div class="rules">
        <h2>10 ЗАПОВІДЕЙ ПРОГРАМІСТА</h2>
        <div class="items">
            <div class="item">
                <div class="number">
                    <img src="../img/1-1.png" alt="1">
                </div>
                <p>
                    <span>Зрозумійте та прийміть як факт, що наробите помилок.</span> Завдання в тому, щоб знайти їх рано, поки вони не потрапили до продакшну. Слава Богу, в нашій індустрії, за винятком хлопців із Лабораторії реактивного руху НАСА, які роблять софт для управління ракетами, помилки, як правило, несмертельні. Ми можемо і повинні вчитися, сміятися та продовжувати роботу
                </p>
            </div>
            <div class="item">
                <p>
                    <span>Ваш код – не ви.</span> Пам'ятайте, що вся суть перевірки коду полягає в тому, щоб знайти помилки, і вони обов'язково знайдуться. Не сприймайте як особисту образу, коли це станеться.
                </p>
                <div class="number">
                    <img src="../img/1-2.png" alt="2">
                </div>
            </div>
            <div class="item">
                <div class="number">
                    <img src="../img/1-3.png" alt="3">
                </div>
                <p>
                    <span>Не важливо, наскільки ви прокачаний спец.</span> Хтось завжди знає більше, і в нього можна повчитися. Варто лише попросити. Шукайте та приймайте те, що кажуть інші, особливо коли здається, що це вам не потрібно.
                </p>
            </div>
            <div class="item">
                <p>
                    <span>Не переписуйте код без консультації.</span> Є тонка грань між «поправити код» та «переписати код». Відчуйте різницю та переслідуйте зміни стилю в рамках штатної перевірки коду, а не як самотній рейнджер.
                </p>
                <div class="number">
                    <img src="../img/1-4.png" alt="4">
                </div>
            </div>
            <div class="item">
                <div class="number">
                    <img src="../img/1-5.png" alt="5">
                </div>
                <p>
                    <span>Ставтеся до людей, які знають менше за вас, з повагою, повагою та терпінням.</span> Люди, які безпосередньо не пов'язані з IT, але яким часто доводиться мати справу з розробниками, вважають нас у кращому випадку зазнайками, а в гіршому — скигликами. Не годуйте стереотипи гнівом та нетерплячістю.
                </p>
            </div>
            <div class="item">
                <p>
                    <span>Єдине, що у світі постійно – це зміни.</span> Будьте готові до змін та приймайте їх з посмішкою. Погляньте на зміни у вимогах, платформі чи інструменті як на виклик, а не як на незручність, яку треба подолати.
                </p>
                <div class="number">
                    <img src="../img/1-6.png" alt="6">
                </div>
            </div>
            <div class="item">
                <div class="number">
                    <img src="../img/1-7.png" alt="7">
                </div>
                <p>
                    <span>Єдиний істинний авторитет дають знання, а чи не становище.</span> Знання породжує авторитет, а авторитет породжує повагу. Хочете поваги у середовищі, де немає місця его – культивуйте знання.
                </p>
            </div>
            <div class="item">
                <p>
                    <span>Боріться за те, у що вірите, але невимушено визнайте поразку.</span> Зрозумійте, іноді ваші ідеї будуть відхиляти. Навіть якщо ви маєте рацію, не треба мститися і говорити «А я попереджав, що так буде». Ніколи не перетворюйте відкинуті ідеї на мученицький стогін або бойовий клич.
                </p>
                <div class="number">
                    <img src="../img/1-8.png" alt="8">
                </div>
            </div>
            <div class="item">
                <div class="number">
                    <img src="../img/1-9.png" alt="9">
                </div>
                <p>
                    <span>Не ставайте "тим кодером у кутку".</span> Не будьте людиною у темному кабінеті, який виходить лише за колою. Кодера у розі не видно, з ним складно зв'язатися, його складно контролювати. Така людина не має голосу у відкритому, кооперативному середовищі. Включайтесь у бесіди та будьте частиною спільноти свого офісу.
                </p>
            </div>
            <div class="item">
                <p>
                    <span>Критикуйте код, а не людей.</span> Будьте ласкаві до людей, але не до коду. Наскільки це можливо, пишіть позитивні коментарі, спрямовані на покращення коду. Зв'яжіть коментарі із прийнятим у команді стандартом коду, техзавданням, підвищенням продуктивності тощо.
                </p>
                <div class="number">
                    <img src="../img/1-10.png" alt="10">
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
