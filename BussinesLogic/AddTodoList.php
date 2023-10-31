<?php
/**
 *  Add Todo in TodoList
 */
function addTodoList(string $todo)
{
    global $Todolist;

    $number = sizeof($Todolist) + 1;
    $Todolist[$number] = $todo;

}