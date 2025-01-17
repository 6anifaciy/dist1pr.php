<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <?php

    $students = ['Иванов', 'Сидоров', 'Кузнецов', 'Смирнов', 'Лебедев'];
    echo "Список студентов: " . implode(', ', $students) . "\n";


    $studentCount = count($students);
    echo "Количество студентов: $studentCount\n";

    if (in_array('Сидоров', $students)) {
        echo "Сидоров есть в списке.\n";
    } else {
        echo "Сидорова нет в списке.\n";
    }

    $expelled = array_pop($students);
    echo "Удаленная фамилия: $expelled\n";

    echo "Обновленный список студентов: " . implode(', ', $students) . "\n";

    ?>

    <?php

    $clubs = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];


    asort($clubs);


    foreach ($clubs as $club => $surname) {
        echo "$club - $surname\n";
    }
    ?>

    <?php

    $student = [
        'Имя' => 'Абдурахман',
        'Фамилия' => 'Кадиев',
        'Группа' => '325 веб',
        'Хобби' => 'Дизайн',
        'Соцсети' => [
            'Telegram' => '@abduraxmanchik'
        ]
    ];


    print_r($student);
    ?>

</body>

</html>