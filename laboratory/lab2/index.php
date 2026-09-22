<?php
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP";
$taskTimeEstimate = 2 ;

?>

<!DOCTYPE html>
<html lang="uk">
    
<head>
    <meta charset="UTF-8">

    <title><?= $appName ?></title>

</head>

<body>
    <header>
        <h1><?= $appName ?></h1>
    </header>

    <main>
        <ul>
            <li>
               Завдання: <?= $taskTitle ?>
            </li>

            <li>
                Очікуваний час: <?= $taskTimeEstimate ?> години
            </li>
        </ul>
    </main>

</body>

</html>
