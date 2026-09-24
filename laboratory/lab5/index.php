<?php
$appName = "Task Manager";

function formatTitle($text, $maxLength = 20)
{
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . '...';
    }
    return $text;
}


function getCurrentGreeting()
{
    $hour = (int) date("H");
    if ($hour >= 6 && $hour < 12) {
        return "Доброго ранку";
    } elseif (12 <= $hour && $hour < 18) {
        return "Добрий день";
    } elseif (18 <= $hour && $hour < 24) {
        return "Добрий вечір";
    } else {
        return "Доброї ночі";
    }
}

$tasks = [
    [
        'id' => 1,
        'title' => 'Complete laboratory assignment No. 5.',
        'priority' => 'High',
        'is_completed' => true,
    ],
    [
        'id' => 2,
        'title' => 'Learn the basics of PHP',
        'priority' => 'Medium',
        'is_completed' => true,
    ],
    [
        'id' => 3,
        'title' => 'Set up a Git repository',
        'priority' => 'Low',
        'is_completed' => false
    ],
    [
        'id' => 4,
        'title' => 'Write a report for lab5.md',
        'priority' => 'High',
        'is_completed' => false
    ]
];

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
            <?php foreach ($tasks as $task): ?>
                <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">

                    Завдання: <?= formatTitle($task['title']) ?> Priority: <?= $task['priority'] ?>
                    <?php if ($task['is_completed'] == true): ?>
                        ✔️ Виконано
                    <?php else: ?>
                        🕒 В процесі
                    <?php endif; ?>

                </li>
            <?php endforeach; ?>
        </ul>
    </main>

</body>

</html>