<?php

require_once  __DIR__  . "/../Models/Game.php";

class GamesController
{

    public function index()
    {
        $game = new Game();
        $games = $game->getAll();
        view(__DIR__ . '/../../Views/games/index.php', compact('games'));
    }

    public function show(int $id)
    {
        $game = (new Game())->get($id);
        view(__DIR__ . '/../../Views/games/show.php', compact('game'));
    }

    public function store(Request $request)
    {
        $game = (new Game());
        $data = $game->uploadImage($request->all());
        // unset($data['files']);
        $game->create($data);
        redirect('/game');
    }

    public function create()
    {
        view(__DIR__ . '/../../Views/games/create.php');
    }

    public function edit($id)
    {
        $game = new Game();
        $game = $game->get($id);

        view(__DIR__ . '/../../Views/games/edit.php', compact('game'));
    }

    public function update(Request $request, int $id)
    {
        $game = (new Game());
       
        $data = $game->uploadImage($request->all());
        $game->update($data, $id);
        redirect('/game');
    }

    public function delete($id)
    {
        $game = (new Game())->delete($id);
        redirect('/game');
    }
}
