<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'time',     // время выполнения
        'price',    // стоимость услуги
        'park_id',  // деталь
    ];
    // связь с ремонтом
    public function repair(){
        return $this->hasMany(Repair::class);
    }
    // связь с деталью
    public function park(){
        return $this->belongsTo(Park::class);
    }
}
