<?php
include('../server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Our courses</title>
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

<div class="container-d">
    <div class="buttons">
        <button>УСІ КУРСИ</button>
        <button>JAVA</button>
        <button>C#</button>
        <button>C++</button>
        <button>PYTHON</button>
        <button>KOTLIN</button>
    </div>

    <div class="courses">

            <?php
                $db = mysqli_connect('localhost', 'root', '', 'courseanta');
                if (isset($_GET['posts'])):
                    $sql = "SELECT * FROM `posts`";
                    if($result = $db->query($sql)):
                        foreach ($result as $row):

            ?>
        <div class="item">
                <div class="header">
                    <div class="category">
                        <?php
                        $id = $row['categoty_id'];
                        $sql2 = "SELECT * FROM `categories` WHERE id = $id";
                        $result2 = $db->query($sql2);
                        foreach ($result2 as $item)
                            echo $item['name'];
                        ?>
                    </div>
                    <div class="price"><?php echo $row['price'];?>$</div>
                </div>
                <div class="image">
                    <img src="<?php echo $row['path'];?>" alt="C#">
                </div>
                <h1><?php echo $row['title'];?></h1>
                <p><?php echo $row['short_description'];?></p>
                <div class="action">
                    <button><a href="./course.php">ДЕТАЛЬНІШЕ</a></button>
                </div>
        </div>
            <?php endforeach;?>
            <?php endif;?>
            <?php endif;?>
    </div>
    <div class="pointers">
        <img src="../img/left.png" alt="left">
        <img src="../img/right.png" alt="right">
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
