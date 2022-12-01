<?php

namespace App\Http\Controllers;

use App\Models\FieldQuestion;
use App\Http\Requests\StoreFieldQuestionRequest;
use App\Http\Requests\UpdateFieldQuestionRequest;

class FieldQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(FieldQuestion $fieldQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldQuestion $fieldQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldQuestionRequest  $request
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldQuestionRequest $request, FieldQuestion $fieldQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldQuestion $fieldQuestion)
    {
        //
    }
}
