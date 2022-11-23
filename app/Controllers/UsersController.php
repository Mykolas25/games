<?php

require_once  __DIR__  . "/../Models/User.php";

class UsersController
{
    public function index()
    {
        $user = new User();
        $users = $user->getAll();
        view(__DIR__ . '/../../Views/users/index.php', compact('users'));
    }

    public function show(int $id)
    {
        $user = (new User())->get($id);
        view(__DIR__ . '/../../Views/users/show.php', compact('user'));
    }

    public function store(Request $request)
    {
        $user = (new User());
        $data = $user->uploadImage($request->all());
        unset($data['files']);
        $user->create($data);
        redirect('/user');
    }

    public function create()
    {
        view(__DIR__ . '/../../Views/users/create.php');
    }

    public function edit($id)
    {
        $user = new User();
        $user = $user->get($id);

        view(__DIR__ . '/../../Views/users/edit.php', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        $user = (new User())->update($request->all());
        redirect('/user');
    }

    public function delete($id)
    {
        $user = (new User())->delete($id);
    }
}
