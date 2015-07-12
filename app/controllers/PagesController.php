<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		return View::make("pages.index");
	}

    /**
     * Display a Gallery
     * @return Response
     */
    public function gallery()
    {
        return View::make("pages.gallery");
    }


    /**
     * Display a Cabin
     * @return Response
     */
    public function cabin()
    {
        return View::make("pages.cabin");
    }


    public function contact()
    {
        return View::make("pages.contact");
    }

    public function viejooeste()
    {
        return View::make('pages.viejooeste');
    }


    public function location()
    {
        return View::make('pages.location');
    }

    public function convenios()
    {
        return View::make('pages.convenios');
    }

    public function blog()
    {
        return View::make('pages.blog');
    }

    public function landing()
    {
        return View::make('pages.landing');
    }

}
