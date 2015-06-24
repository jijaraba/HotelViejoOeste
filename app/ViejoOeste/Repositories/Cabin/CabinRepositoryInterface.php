<?php namespace ViejoOeste\Repositories\Cabin;

interface CabinRepositoryInterface {
    public function all();
    public function find($idcabin);
    public function getBySlug($slug);
}