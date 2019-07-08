<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Card;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;

class CardsApiController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return $cards;
    }

    public function store(StoreCardRequest $request)
    {
        return Card::create($request->all());
    }

    public function update(UpdateCardRequest $request, Card $card)
    {
        return $card->update($request->all());
    }

    public function show(Card $card)
    {
        return $card;
    }

    public function destroy(Card $card)
    {
        $card->delete();

        return response("OK", 200);
    }
}
