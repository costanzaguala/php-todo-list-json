<?php
    $todolistJSON = file_get_contents('db/todolist.json');
    header('Content-Type: application/json');
    echo $todolistJSON;
