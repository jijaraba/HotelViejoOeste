<?php namespace ViejoOeste\Repositories\Plan;

interface PlanRepositoryInterface {
    public function all();
    public function find($idplan);
}