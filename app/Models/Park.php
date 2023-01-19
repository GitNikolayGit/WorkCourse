<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',     // название детали
        'price',     // стоимость детали
    ];
    // связь с service
    public function service(){
        return $this->hasMany(Service::class);
    }
}
