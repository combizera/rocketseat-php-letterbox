<?php

$search = $_REQUEST['search'] ?? '';

$movies = $database
    ->query
    (
        "SELECT * FROM movies WHERE title LIKE :search",
        \models\Movie::class,
        [':search' => "%$search%"]
    )
    ->fetchAll();

view('index', compact('movies'));