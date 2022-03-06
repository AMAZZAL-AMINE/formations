<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //protected data 
    protected $fillable  = [
        'name','cin','cin_img','phone','fomation_id','type_learn',
        'is_accepted',
    ];

    public function formation() {
        return $this->belongsTo(Formation::class, "fomation_id");
    }

    public function acceptedStudent() {
      return $this->belongsTo(StudentsAccepted::class);  
    }
    

}
