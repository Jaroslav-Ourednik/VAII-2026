<?php

namespace App\Controllers;

use Framework\Http\HttpException;
use App\Models\Event;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class EventController extends BaseController
{
    public function index(Request $request): Response
    {
        $events = Event::getAll();
        return $this->html(['events' => $events]);
    }

    public function detail(Request $request): Response
    {
        return $this->html();
    }

    public function delete(Request $request): Response
    {
        $id = (int)$request->value('id');
        $event = Event::getOne($id);
        if ($event !== null) {
           $event->delete();
        }
        return $this->redirect($this->url('event.index'));
    }

    public function create(Request $request): Response
    {
        return $this->html();
    }

    public function store(Request $request): Response
    {
        $event = new Event();
        $event->setTitle($request->value('title'));
        $event->setType($request->value('type'));
        $event->setEventDate($request->value('event_date'));
        $event->setLocation($request->value('location'));
        $event->setDescription($request->value('description'));
        $event->save();
        return $this->redirect($this->url('event.index'));
    }

    public function edit(Request $request): Response
    {
        $event = Event::getOne((int)$request->value('id'));
        if ($event === null) {
            throw new HttpException(404);
        }
        return $this->html(['event' => $event]);
    }

    public function update(Request $request): Response
    {
        $event = Event::getOne((int)$request->value('id'));
        if ($event === null) {
            throw new HttpException(404);
        }
        $event->setTitle($request->value('title'));
        $event->setType($request->value('type'));
        $event->setEventDate($request->value('event_date'));
        $event->setLocation($request->value('location'));
        $event->setDescription($request->value('description'));
        $event->save();
        return $this->redirect($this->url('event.index'));
    }
}
