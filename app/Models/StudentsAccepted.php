<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsAccepted extends Model
{
    use HasFactory;

    //protect Data
    protected $fillable = [
        'student_id',
    ];
    public function student() {
        return $this->hasOne(Student::class, 'student_id');
    }
}
