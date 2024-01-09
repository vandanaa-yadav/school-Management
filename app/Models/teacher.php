<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  
    protected $table ='teachers';
    protected $primaryKey = 'id';
    protected $fillable =[
        'name',
        'subject',
        'room_no',
        'email',
        'phone'

    ];
    use HasFactory;
}
