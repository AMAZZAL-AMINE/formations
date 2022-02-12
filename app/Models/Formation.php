<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    //protected data
    protected $fillable = [
        "name","slug","desc","price",
    ];

    //make relationshsip with Students
    public function student() {
        return $this->hasMany(Student::class);
    }

}
