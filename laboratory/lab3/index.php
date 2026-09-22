<?php
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP";
$taskTimeEstimate = 2 ;
$isCompleted = true;
?>

<!DOCTYPE html>
<html lang="uk">
    
<head>
    <meta charset="UTF-8">
    <title><?= $appName ?></title>

    <style>
        .task-done {
            color: darkgreen;
            text-decoration: line-through;
        }

        .task-pending {
            color: gray;
        }
    </style>

</head>

<body>
    <header>
        <h1><?= $appName ?></h1>
    </header>

    <main>
        <ul>
            <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
               Завдання: <?= $taskTitle ?>
               <?php if ($isCompleted == true): ?>
                ✔️ Виконано
               <?php else: ?>
                🕒 В процесі
               <?php endif; ?>
            
            </li>

            <li>
                Очікуваний час: <?= $taskTimeEstimate ?> години
            </li>
        </ul>
    </main>

</body>

</html>