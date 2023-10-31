<?php

require_once  __DIR__ ."/../Model/TodoListModel.php";
require_once  __DIR__ ."/../BussinesLogic/ShowTodoList.php";
require_once  __DIR__ ."/../View/ViewAddTodoList.php";
require_once  __DIR__ ."/../View/ViewRemoveTodoList.php";
require_once  __DIR__ ."/../Helper/input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu :" . PHP_EOL;
        echo "1. Tambah Todo".PHP_EOL;
        echo "2. Hapus Todo" .PHP_EOL;
        echo "x. Keluar" .PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            // Keluar
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi";
}
