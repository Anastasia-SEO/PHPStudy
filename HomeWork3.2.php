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
            background: darkred;
            color: black;
            border-spacing: 3px;
        }
        td, th {
            background: whitesmoke;
            padding: 6px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th class="main">ID</th>
        <th class="main">Title</th>
        <th class="main" >Description</th>
        <th class="main">Owner</th>
        <th class="main">Deadline</th>
        <th class="main">Status</th>
    </tr>
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
    for ($i = 0; $i <= 4; $i++) {
        echo "<tr>
    <td>{$task_manager[$i]['ID']}</td>: 
    <td>{$task_manager[$i]['title']}</td>:
    <td>{$task_manager[$i]['description']}</td>:
    <td>{$task_manager[$i]['owner']}</td>:
    <td>{$task_manager[$i]['deadline']}</td>:
    <td>{$task_manager[$i]['status']}</td>:";
    }
    ?>
</body>
</html>




