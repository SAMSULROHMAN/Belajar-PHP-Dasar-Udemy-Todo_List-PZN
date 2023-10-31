<?php

require_once "../Model/TodoListModel.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList(1);
addTodoList("Samsul");
addTodoList(3);

var_dump($Todolist);