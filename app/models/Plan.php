<?php

class Plan extends Eloquent {

    protected $primaryKey = 'idplan';
    protected $fillable = ['name','rate','starts','ends'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = 'plans';

    /**
     * @return mixed
     */
    public function cabin()
    {
        return $this->belongsTo('Cabin');
    }

}