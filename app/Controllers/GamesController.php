<?php

require_once  __DIR__  . "/../Models/Game.php";

class GamesController{

    public function index(){
        $game = new Game();
        $games = $game->getAll();
        view(__DIR__ . '/../../Views/games/index.php', compact('games'));
    }

    public function show(int $id)
    {
        $game = (new Game())->get($id);
        view(__DIR__ . '/../../Views/games/show.php', compact('game'));
    }

    public function store(array $data)
    {
        $game = (new Game())->create($data);
    }
}