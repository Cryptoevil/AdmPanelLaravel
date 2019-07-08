<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCardRequest;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;

class CardsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('card_access'), 403);

        $cards = Card::all();

        return view('admin.cards.index', compact('cards'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('card_create'), 403);

        return view('admin.cards.create');
    }

    public function store(StoreCardRequest $request)
    {
        abort_unless(\Gate::allows('card_create'), 403);

        $card = Card::create($request->all());

        return redirect()->route('admin.cards.index');
    }

    public function edit(Card $card)
    {
        abort_unless(\Gate::allows('card_edit'), 403);

        return view('admin.cards.edit', compact('card'));
    }

    public function update(UpdateCardRequest $request, Card $card)
    {
        abort_unless(\Gate::allows('card_edit'), 403);

        $card->update($request->all());

        return redirect()->route('admin.cards.index');
    }

    public function show(Card $card)
    {
        abort_unless(\Gate::allows('card_show'), 403);

        return view('admin.cards.show', compact('card'));
    }

    public function destroy(Card $card)
    {
        abort_unless(\Gate::allows('card_delete'), 403);

        $card->delete();

        return back();
    }

    public function massDestroy(MassDestroyCardRequest $request)
    {
        Card::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
