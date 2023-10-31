<?php
/**
 *  Remove Todo in TodoList
 */
function removeTodoList(int $number): bool
{
    global $Todolist;

    if ($number > sizeof($Todolist)) {
        return false;
    }

    for ($i=$number; $i < sizeof($Todolist); $i++) { 
        $Todolist[1] = $Todolist[$i + 1];
    }    

    unset($Todolist[sizeof($Todolist)]);

    return true;
}