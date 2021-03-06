<?php

namespace yybawang\ebank\Models;


use Illuminate\Database\Eloquent\Builder;

class FundIdentityType extends FundModel
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function(Builder $builder){
            return $builder->where('status', 1);
        });
    }
}
