<?php

/**
 * Show Todo in TodoList
 */


function showTodoList()
{
    global $Todolist;
    echo "TODOLIST".PHP_EOL;

    foreach ($Todolist as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }
}