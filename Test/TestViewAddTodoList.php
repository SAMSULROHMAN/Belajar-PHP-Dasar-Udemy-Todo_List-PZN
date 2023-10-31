<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Samsul");
addTodoList("Rohman");
addTodoList("STC");


viewAddTodoList();

showTodoList();

