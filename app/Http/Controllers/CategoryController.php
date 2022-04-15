<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function index()
	{
		return view('dashboard.Categories.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 */
	public function create()
	{
		return view('dashboard.Categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 */
	public function store(Request $request)
	{
		return 'kategoriy saved';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 */
	public function show($id)
	{
		return view('dashboard.Categories.create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 */
	public function edit($id)
	{
		return view('dashboard.Categories.create');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 */
	public function destroy($id)
	{
		return 'deleted';
	}
}
