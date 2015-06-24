<?php

class Cabin extends Eloquent {

    protected $primaryKey = 'idcabin';
    protected $fillable = ['name','name','description','capacity'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = 'cabins';



    /**
     * @return mixed
     */
    public function plan()
    {
        return $this->hasMany('Plan', 'idcabin', 'idcabin');
    }
}