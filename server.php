<?php

$string = file_get_contents('data/todo-list.json');
$array = json_decode($string, true);

if(isset($_POST['todoItem']))
{
    array_push($array, $_POST['todoItem']);
    $array_converted = json_encode($array);
    file_put_contents('data/todoList.json', $array_converted);
}

header('Content-Type: application/json');
echo json_encode($array);

?>