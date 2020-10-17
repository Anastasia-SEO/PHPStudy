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

echo '<table>';
foreach ($task_manager as $task_manager) {
    echo "#<td>{$task_manager['ID']}</td>: <td>{$task_manager['title']}</td>: <td>{$task_manager['description']}</td>: 
<td>{$task_manager['owner']}</td>:
    <td>{$task_manager['deadline']}</td>: <td>{$task_manager['status']}</td>:", PHP_EOL;
}
echo '</table>';

//echo '</table>';
//foreach ($task_manager as $key => $value) {
//    echo "{$key}: {$value}", PHP_EOL;
//}
//echo '</table>';




