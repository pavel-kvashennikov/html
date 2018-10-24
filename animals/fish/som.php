<?php
require_once '../../connection.php';
global $link;
$link =  mysqli_connect($host,$user,$password,$database)
or die("Ошибка " . mysqli_error($link));
?>

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
<div>
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
                <a class="dropdown-item" href="/animals/bird/aist.php">Аисты</a>
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
</div>

<?php
# Если кнопка нажата
if( isset( $_POST['add'] ) )
{
    $query = "UPDATE animal SET a_count = a_count+1 WHERE idanimal='4'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
};
if( isset( $_POST['del'] ) )
{
    $query = "UPDATE animal SET a_count = a_count-1 WHERE idanimal='4'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
}
if (isset( $_POST['open']))
{
    $query = "UPDATE animal SET islock='0' WHERE idanimal='4'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
}
if (isset( $_POST['close']))
{
    $query = "UPDATE animal SET islock='1' WHERE idanimal='4'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
}
?>


<div class="container">
    <form method="POST">
        <div class="jumbotron">
            <h1 class="display-4">Сом</h1>
            <img src="som.jpg">
            <p class="lead">Обыкнове́нный сом[1], или европе́йский сом[1] (лат. Silurus glanis) — крупная[2] пресноводная бесчешуйчатая рыба семейства сомовых (Siluridae).
                Длина тела до 5 м, вес до 400 кг (по историческим данным)[3]. Л.П. Сабанеев приводит сведения Кесслера о поимке сомов весом более 300 кг в XIX веке, в Днестре и Одере[4]. Официально зарегистрирован пойманный сом весом 306 кг, длиной более 3 м и возрастом около 80 лет[5]. Сейчас сомы весом выше 100 кг встречаются крайне редко, тем не менее зарегистрированы случаи поимки сомов длиной более 2,5 м и весом около 150 кг[6]. Анальный плавник длинный, жировой плавник отсутствует, непарные плавники не имеют шипов.</p>
            <hr class="my-4">
            <p>Всего сейчас сомов: <?php
                $query = "select a_count from animal where a_name = 'som';";
                $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
                if($result)
                {
                    $row = mysqli_fetch_row($result);
                    echo "$row[0]";
                    mysqli_free_result($result);
                }
                ?></p>
            <p>Состояние клетки: <?php
                $query = "select islock from animal where a_name = 'som';";
                $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
                if($result)
                {
                    $row = mysqli_fetch_row($result);
                    if ($row[0] == 0){echo("Открыта");}
                    else if ($row[0] == 1) {echo("Закрыта");}
                    mysqli_free_result($result);
                }
                ?></p>
            <p>Для добавления или удаления особи воспользуйтесь кнопками ниже: </p>
            <input type="submit" class="btn btn-primary btn-lg" name="add" value="Добавить рыбку" />
            <input type="submit" class="btn btn-primary btn-lg" name="del" value="Удалить рыбку" />
            <?php
            $query = "select islock from animal where a_name = 'som';";
            $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
            if($result)
            {
                $row = mysqli_fetch_row($result);
                if ($row[0] == 0){
                    echo("<input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"close\" value=\"Закрыть клетку\" />");
                } else if ($row[0] == 1) {echo("<input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"open\" value=\"Открыть клетку\" />");};
                mysqli_free_result($result);
            }
            ?>
        </div>
    </form>
</div>

</body>
</html>