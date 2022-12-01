<?php

namespace App\Http\Controllers;

use App\Models\CardType;
use App\Http\Requests\StoreCardTypeRequest;
use App\Http\Requests\UpdateCardTypeRequest;

class CardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function show(CardType $cardType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function edit(CardType $cardType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardTypeRequest  $request
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardTypeRequest $request, CardType $cardType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardType $cardType)
    {
        //
    }
}
