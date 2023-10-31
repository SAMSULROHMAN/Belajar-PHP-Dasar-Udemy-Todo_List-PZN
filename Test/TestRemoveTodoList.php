<?php

require_once "../Model/TodoListModel.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/RemoveTodoList.php";

addTodoList("Eko");
addTodoList("Khurniawan");
addTodoList("Khanedy");
addTodoList("Samsul");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();





