<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('dashboard.Dishes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
		return view('dashboard.Dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return 'dish created';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
		return view('dashboard.Dishes.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
		return view('dashboard.Dishes.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id

     */
    public function update(Request $request, $id)
    {
        return 'updated record ';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
		return 'updated record ';
	}
}
