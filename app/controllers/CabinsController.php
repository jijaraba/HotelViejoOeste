<?php

use ViejoOeste\Repositories\Cabin\CabinRepositoryInterface;

class CabinsController extends \BaseController {

    protected $cabin;

    /**
     * @param CabinRepositoryInterface $cabin
     */
    function __construct(CabinRepositoryInterface $cabin)
    {
        $this->cabin = $cabin;
    }

    /**
	 * Display a listing of the resource.
	 * GET /cabins
	 * @return Response
	 */
	public function index()
	{
        return View::make('cabins.index',array('cabins'=>$this->cabin->all(),'slug'=>null));
	}

    /**
	 * Display the specified resource.
	 * GET /cabins/{idcabin}
	 * @param  int  $idcabin
	 * @return Response
	 */
	public function show($idcabin)
	{
        return Response::json($this->cabin->find($idcabin));
	}

    /**
     * Get Cabin BY Slug
     * GET /cabins/{slug}
     * @param  String  $slug
     * @return Response
     */
    public function getbyslug($slug)
    {
        return View::make('cabins.show',array('cabins'=>$this->cabin->all(),'cabin'=>$this->cabin->getBySlug($slug),'slug' => $slug));
    }
}