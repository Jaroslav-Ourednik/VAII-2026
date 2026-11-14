<?php

namespace App\Controllers;

use Framework\Http\HttpException;
use App\Models\Game;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class GameController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['games' => Game::getAll()]);
    }

    public function create(Request $request): Response
    {
        return $this->html();
    }

    public function store(Request $request): Response
    {
        $game = new Game();
        $game->setName($request->value('name'));
        $game->setPlatform($request->value('platform'));
        $game->setMaxPlayers((int)$request->value('max_players'));
        $game->save();
        return $this->redirect($this->url('game.index'));
    }

    public function edit(Request $request): Response
    {
        $game = Game::getOne((int)$request->value('id'));
        if ($game === null) {
            throw new HttpException(404);
        }
        return $this->html(['game' => $game]);
    }

    public function update(Request $request): Response
    {
        $game = Game::getOne((int)$request->value('id'));
        if ($game === null) {
            throw new HttpException(404);
        }
        $game->setName($request->value('name'));
        $game->setPlatform($request->value('platform'));
        $game->setMaxPlayers((int)$request->value('max_players'));
        $game->save();
        return $this->redirect($this->url('game.index'));
    }

    public function delete(Request $request): Response
    {
        $game = Game::getOne((int)$request->value('id'));
        if ($game !== null) {
            $game->delete();
        }
        return $this->redirect($this->url('game.index'));
    }
}