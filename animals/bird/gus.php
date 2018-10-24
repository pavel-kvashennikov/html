<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Zoo</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/index.php">Главная</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/zoo/animals/fish/fish.php" role="button" aria-haspopup="true" aria-expanded="false">Рыбы</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/fish/karp.php">Карп</a>
            <a class="dropdown-item" href="/animals/fish/losos.php">Лосось</a>
            <a class="dropdown-item" href="/animals/fish/som.php">Сом</a>
            <a class="dropdown-item" href="/animals/fish/zmei.php">Змееголовые</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/zoo/animals/bird/bird.php" role="button" aria-haspopup="true" aria-expanded="false">Птицы</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/bird/aist.php">Аисты</a>
            <a class="dropdown-item" href="/animals/bird/gus.php">Гуси</a>
            <a class="dropdown-item" href="/animals/bird/sokol.php">Соколы</a>
            <a class="dropdown-item" href="/animals/bird/sova.php">Совы</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/zoo/animals/mlek/mlek.php" role="button" aria-haspopup="true" aria-expanded="false">Млекопитающие</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/mlek/hishn.php">Хищные</a>
            <a class="dropdown-item" href="/animals/mlek/parnokop.php">Парнокопытные</a>
            <a class="dropdown-item" href="/animals/mlek/primat.php">Приматы</a>
            <a class="dropdown-item" href="/animals/mlek/zayac.php">Зайцы</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/zoo/animals/presm/presm.php" role="button" aria-haspopup="true" aria-expanded="false">Пресмыкающиеся</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/animals/presm/cherep.php">Черепахи</a>
            <a class="dropdown-item" href="/animals/presm/krokodil.php">Крокодилы</a>
            <a class="dropdown-item" href="/animals/presm/chesh.php">Чешуйчетые</a>
        </div>
    </li>
</ul>
</body>
</html>