<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',         // год выпуска
        'num',          // номер
        'malfunctions', // неисправности
        'surname',        // владелец
        'firstName',
        'patronymic',
        'brand_id',     // модель
        'color_id',     // цвет
        //'client_id',
    ];
    // связь с ремонтом
    public function repair(){
        return $this->hasMany(Repair::class);
    }
    // модель
    public function  brand(){
        return $this->bolongsTo(Brand::class);
    }
    // цвет
    public function  color(){
        return $this->bolongsTo(Color::class);
    }
}
