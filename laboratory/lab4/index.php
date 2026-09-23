<?php
$appName = "Task Manager";
$taskTitle = "Learn PHP basics and function";
$taskTimeEstimate = 2 ;
$isCompleted = false;

function formatTitle($text, $maxLength = 20) {
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . '...';
    }
    return $text;
}


function getCurrentGreeting() {
    $hour = (int) date("H");
    if (6 <= $hour && $hour < 12) {
        return "Доброго ранку";
    } elseif(12 <= $hour && $hour < 18) {
        return "Добрий день";
    } elseif (18 <= $hour && $hour < 24) {
        return "Добрий вечір";
    } else {
        return "Доброї ночі";
    }
}

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
        <p><?= getCurrentGreeting() ?></p>
    </header>

    <main>
        <ul>
            <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
               Завдання: <?= formatTitle($taskTitle) ?>
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