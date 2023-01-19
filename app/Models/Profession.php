<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    // связь с работником
    public function worker(){
        return $this->hasMany(Worker::class);
    }
}
