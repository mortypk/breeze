<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';

    protected $fillable = [
        'name', 'title_id'
    ];
    public function title(){
        return $this->belongsTo(Title::class);
    }
}
