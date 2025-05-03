<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'title',
        'description',
        'image',
    ];

    // Relasi One-to-Many ke ServiceDetail
    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class. 'service_id');
    }

}
