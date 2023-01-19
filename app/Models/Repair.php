<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',        // оказанная услуга
        'car_id',
        'worker_id',
        'client_id',
        'reserve_id',
        //'datestart' ,         // поставка на ремонт
        'datereturn',        // дата возврата
    ];
    // связь с ремонтом
    public function repair(){
        return $this->hasMany(Repair::class);
    }
    // связь с машиной
    public function car(){
        return $this->bolongsTo(Car::class);
    }
    // связь с клиентом
    public function  client(){
        return $this->bolongsTo(Client::class);
    }
}
