<?php

class LandingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /landig
	 * @return Response
	 */
	public function index()
	{
		return View::make('landing.index');
	}


}