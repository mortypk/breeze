<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','fname','gender','address','phone_id','grade_id','birthday'
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function phone()
    {
        return $this->hasOne(Phone::class,'id','phone_id');
    }
}
