<?php

require_once __DIR__ . "/../app/Controllers/GamesController.php";
require_once __DIR__ . "/../helpers.php";

// (new GamesController())->index();

// (new GamesController())->show(3);

(new GamesController())->store(
    [
        'name'=>'Half-Life 2',
        'release_date' => '2004',
        'genre' => 'First-person shooter',
        'developer' => 'Valve Corporation',
        'description' => 'ASDASDASDASDASD ASD ASD ASD ASD ',
    ]
);