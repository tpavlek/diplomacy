<?php

class UpdateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$updates = Update::all();
		return View::make('update/index', array('updates' => $updates));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('update/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$update = Update::create(Input::all());
		return Redirect::action('HomeController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$update = Update::find($id);
		return print_r($update);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$update = Update::find($id);
		return View::make('update/edit', array('update' => $update));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$update = Update::find($id);

		$update->summary = Input::get("summary");
		$update->full = Input::get("full");
		$update->img_url = Input::get("img_url");

		$update->save();
		return Redirect::action('UpdateController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$update = Update::find($id);
		$update->delete();
		return Redirect::action('UpdateController@index');
	}

}
