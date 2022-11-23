<?php

require_once __DIR__  . "/Model.php";

class Game extends Model
{
    public $table = 'games';
    public $fillables = [
        'name',
        'release_date',
        'image',
        'genre',
        'developer',
        'description'
    ];
}
