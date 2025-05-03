<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $fillable = [
       'service_id',
        'title',
        'body',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
