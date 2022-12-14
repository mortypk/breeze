<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
