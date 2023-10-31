<?php

require_once  __DIR__ . "/../Model/TodoListModel.php";
require_once  __DIR__ ."/../Helper/input.php";
require_once  __DIR__ ."/../BussinesLogic/AddTodoList.php";


function viewAddTodoList()
{
    echo "MENAMBAH TODO". PHP_EOL;
    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        // batal
        echo "Batal Menambah Todo". PHP_EOL;
    } else {
        addTodoList($todo);
    }
}