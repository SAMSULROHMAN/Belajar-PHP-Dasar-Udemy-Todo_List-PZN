<?php

require_once  __DIR__ ."/Model/TodoListModel.php";
require_once  __DIR__ ."/BussinesLogic/ShowTodoList.php";
require_once  __DIR__ ."/BussinesLogic/AddTodoList.php";
require_once  __DIR__ ."/BussinesLogic/RemoveTodoList.php";
require_once  __DIR__ ."/View/ViewShowTodoList.php";
require_once  __DIR__ ."/View/ViewAddTodoList.php";
require_once  __DIR__ ."/View/ViewRemoveTodoList.php";
require_once  __DIR__ ."/Helper/input.php";

echo "Aplikasi Todolist".PHP_EOL;

viewShowTodoList();