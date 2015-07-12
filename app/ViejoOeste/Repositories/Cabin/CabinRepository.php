<?php namespace ViejoOeste\Repositories\Cabin;

use Cabin;

class CabinRepository implements CabinRepositoryInterface {

    /**
     * Return all values
     * @return mixed
     */
    public function all()
    {
        return Cabin::orderBy('capacity')->get();
    }

    /**
     * Find in Databases
     * @param $idcabin
     * @return mixed
     */
    public function find($idcabin)
    {
        return Cabin::find($idcabin);
    }

    /**
     * Find in Databases
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug)
    {
        return Cabin::where('slug','=',$slug)->first();
    }
}

