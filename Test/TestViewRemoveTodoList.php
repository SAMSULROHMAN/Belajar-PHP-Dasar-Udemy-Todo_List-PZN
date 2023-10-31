<?php

require_once "../Model/TodoListModel.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Samsul");
addTodoList("Rohman");
addTodoList("STC");

showTodoList();
viewRemoveTodoList();

showTodoList();