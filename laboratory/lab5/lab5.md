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

Лабораторна робота №5 (2 години)

1.
Індексований: числовий ключі з 0:


$colors = ['red', 'green'];
echo $colors[0]; // red

Асоціативний: іменовані ключі  'title'

$task = ['id' => 1, 'title' => 'Complete laboratory'];
echo $task['title']; // Complete laboratory

2.foreach ($tasks as $task) { ... }

$tasks: масив, $task: поточний елемент на кожній ітерації.

foreach сам проходить по всіх елементах масиву незалежно від ключів не треба рахувати індекси вручну, не зіб'ється на асоціативних ключах.

3.Поверне значення null але в логах буде попередження, сторінка працюватиме далі.

4.
<?php foreach ($tasks as $task) { ?>
    <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">
        <?= formatTitle($task['title']) ?>
        <?php if ($task['is_completed']) { ?>
            ✔️ Виконано
        <?php } else { ?>
            🕒 В процесі
        <?php } ?>
    </li>
<?php } ?>
В альтернативному коді читається та пишеться послідовніше, бо кожне закриття endif;, endforeach; підписане словами, 
а не однаковими "}", які легко переплутати чи забути.

<?php foreach ($tasks as $task): ?>
    <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">
        <?= formatTitle($task['title']) ?>
        <?php if ($task['is_completed']): ?>
            ✔️ Виконано
        <?php else: ?>
            🕒 В процесі
        <?php endif; ?>
    </li>
<?php endforeach; ?>

5.count($tasks) виводить кількість елементів. //4
array_filter($array, $callback) залишає елементи, що проходять умову.
usort($array, $callback) сортує за власною логікою порівняння.
