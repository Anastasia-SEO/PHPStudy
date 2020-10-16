<?php


$task_manager = [
    [
        'ID' => 1998,
        'title' => 'Indexation',
        'description' =>  'Add all URLs of Site1 and Site2 to GSC',
        'owner' => 'Anna',
        'deadline' => '02.10.2020',
        'status' => 'Done',
    ],
    [
        'ID' => 2003,
        'title' => 'Audit',
        'description' => 'Use Screaming Frog for Audit',
        'owner' => 'Tanya',
        'deadline' => '14.10.2020',
        'status' => 'In process',
    ],
    [   'ID' => 2012,
        'title' => 'Semantic Core',
        'description' => 'Make SC for Site1 and Site 2',
        'owner' => 'Oleg',
        'deadline' => '04.10.2020',
        'status' => 'Done',
    ],
    [   'ID' => 2015,
        'title' => 'Linkbuilding',
        'description' => 'Buy links for Site1 and Site2',
        'owner' => 'Denis',
        'deadline' => '30.10.2020',
        'status' => 'In Process',
    ],
    [   'ID' => 2018,
        'title' => 'Meta Tags',
        'description' => 'Add Title and Description for Site3 and Site4',
        'owner' => 'Maria',
        'deadline' => '09.10.2020',
        'status' => 'Done',
    ],
];

//Home_Work loops
//for ($i = 1; $i <= 5; $i++)
//    var_dump($i);
//
//foreach ($task_manager as $task_manager) {
//    echo "#{$task_manager['ID']}: {$task_manager['title']}: {$task_manager['description']}: {$task_manager['owner']}:
//    {$task_manager['deadline']}: {$task_manager['status']}:", PHP_EOL;
//}
//
//foreach ($task_manager as $key => $value) {
//    echo "{$key}: {$value}", PHP_EOL;
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Manager</title>
  <style>
        table {
            width: 100%;
            background: cadetblue;
            color: black;
            border-spacing: 1px;
        }
        td, th {
            background: cadetblue;
            padding: 5px;
        }
  </style>
</head>
<body>
 <table>
    <?=$task_manager ?>
 </table>
</body>
</html>
