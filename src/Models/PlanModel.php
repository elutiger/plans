<?php

namespace Creatydev\Plans\Models;

use Illuminate\Database\Eloquent\Model;

class PlanModel extends Base
{
    protected $table = 'plans';
    protected $guarded = [];
    protected $fillable = ['name', 'description', 'price', 'currency', 'duration', 'metadata'];
    protected $casts = [
        'metadata' => 'object',
    ];

    public function features()
    {
        return $this->hasMany(config('plans.models.feature'), 'plan_id');
    }
}
