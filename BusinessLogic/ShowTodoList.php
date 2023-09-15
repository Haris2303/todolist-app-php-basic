<?php

/**
 * Show all todolist
 */
function showTodoList()
{
    global $todolist;

    echo 'TODOLIST: ' . PHP_EOL;
    foreach ($todolist as $num => $value) {
        echo "$num. $value" . PHP_EOL;
    }
}
