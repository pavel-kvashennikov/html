<?php
require_once 'connection.php';
global $link;
$link =  mysqli_connect($host,$user,$password,$database)
or die("Ошибка " . mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Zoo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/index.php">Главная</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/animals/fish/fish.php" role="button" aria-haspopup="true" aria-expanded="false">Рыбы</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/fish/karp.php">Карп</a>
            <a class="dropdown-item" href="/animals/fish/losos.php">Лосось</a>
            <a class="dropdown-item" href="/animals/fish/som.php">Сом</a>
            <a class="dropdown-item" href="/animals/fish/zmei.php">Змееголовые</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/animals/bird/bird.php" role="button" aria-haspopup="true" aria-expanded="false">Птицы</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="animals/bird/aist.php">Аисты</a>
            <a class="dropdown-item" href="/animals/bird/gus.php">Гуси</a>
            <a class="dropdown-item" href="/animals/bird/sokol.php">Соколы</a>
            <a class="dropdown-item" href="/animals/bird/sova.php">Совы</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/animals/mlek/mlek.php" role="button" aria-haspopup="true" aria-expanded="false">Млекопитающие</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/mlek/hishn.php">Хищные</a>
            <a class="dropdown-item" href="/animals/mlek/parnokop.php">Парнокопытные</a>
            <a class="dropdown-item" href="/animals/mlek/primat.php">Приматы</a>
            <a class="dropdown-item" href="/animals/mlek/zayac.php">Зайцы</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/animals/presm/presm.php" role="button" aria-haspopup="true" aria-expanded="false">Пресмыкающиеся</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/presm/cherep.php">Черепахи</a>
            <a class="dropdown-item" href="/animals/presm/krokodil.php">Крокодилы</a>
            <a class="dropdown-item" href="/animals/presm/chesh.php">Чешуйчетые</a>
        </div>
    </li>
</ul>

<div class="container">
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="/fish.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Рыбы</h5>
                <p class="card-text">В нашем зоопарке множество уникальных представителей рыб.<br>
                А точнее их: <?php
                    $query = "select sum(a_count) from animal where vid='fish'";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if($result)
                    {
                            $row = mysqli_fetch_row($result);
                            echo "$row[0]";
                        mysqli_free_result($result);
                    }
                    ?>
                </p>
                <a href="/animals/fish/karp.php" class="btn btn-primary">К рыбкам</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/bird.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Птицы</h5>
                <p class="card-text">Птицы так же имеются в зоопарке.<br>
                Всего их: <?php
                    $query = "select sum(a_count) from animal where vid='bird'";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if($result)
                    {
                        $row = mysqli_fetch_row($result);
                        echo "$row[0]";
                        mysqli_free_result($result);
                    }
                    ?></p>
                <a href="/animals/bird/aist.php" class="btn btn-primary">К птичкам</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/mlek.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Млекопитающие</h5>
                <p class="card-text">Огромное количество всяких млекопитающих.<br>
                Всего их: <?php
                    $query = "select sum(a_count) from animal where vid='mlek'";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if($result)
                    {
                        $row = mysqli_fetch_row($result);
                        echo "$row[0]";
                        mysqli_free_result($result);
                    }
                    ?></p>
                <a href="/animals/mlek/hishn.php" class="btn btn-primary">К кошкам</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/presm.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Пресмыкающиеся</h5>
                <p class="card-text">Черепах тоже много.<br>
                Всего их: <?php
                    $query = "select sum(a_count) from animal where vid='bird'";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if($result)
                    {
                        $row = mysqli_fetch_row($result);
                        echo "$row[0]";
                        mysqli_free_result($result);
                    }
                    ?></p>
                <a href="/animals/presm/cherep.php" class="btn btn-primary">К черепашкам</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
$obj = new Zoopark();
$obj->say();
?>


