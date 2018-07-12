<?php

namespace App\Http\Controllers;
use App\Drink;
use App\Http\Requests\DrinkRequest;

class Drinks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Drink::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrinkRequest $request)
    {
        $data = $request->only(["amount"]);
        $drink = Drink::create($data);
        return response($drink, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        return $drink;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DrinkRequest $request, Drink $drink)
    {
        $data = $request->only(["amount"]);
        $drink->fill($data)->save();
        return $drink;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        $drink->delete();
        return response(null, 204);
    }
}
