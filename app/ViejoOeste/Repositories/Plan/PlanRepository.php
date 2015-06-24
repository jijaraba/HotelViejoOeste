<?php namespace ViejoOeste\Repositories\Plan;

use Plan;

class PlanRepository implements PlanRepositoryInterface {

    /**
     * Return all values
     * @return mixed
     */
    public function all()
    {
        return Plan::all();
    }

    /**
     * Find in Databases
     * @param $idplan
     * @return mixed
     */
    public function find($idplan)
    {
        return Plan::find($idplan);
    }

}

