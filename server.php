<?php

$string = file_get_contents('data/todo-list.json');
$array = json_decode($string, true);

if(isset($_POST['todoItem']))
{
    $new_item=
    [
        'text' => $_POST['todoItem'],
        'done' => 'true'
    ];
    
    array_push($array, $new_item);
    $array_encoded = json_encode($array);
    file_put_contents('data/todo-list.json', $array_encoded);
}

header('Content-Type: application/json');
echo json_encode($array);

?>