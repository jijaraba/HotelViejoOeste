<?php

use ViejoOeste\Repositories\Plan\PlanRepositoryInterface;

class PlanController extends \BaseController {

    protected $plan;

    /**
     * @param PlanRepositoryInterface $plan
     */
    function __construct(PlanRepositoryInterface $plan)
    {
        $this->plan = $plan;
    }

    /**
     * Display a listing of the resource.
     * GET /plans
     * @return Response
     */
    public function index()
    {
        return Response::json($this->plan->all());
    }

    /**
     * Display the specified resource.
     * GET /plans/{idplan}
     * @param  int  $idplan
     * @return Response
     */
    public function show($idplan)
    {
        return Response::json($this->plan->find($idplan));
    }

}