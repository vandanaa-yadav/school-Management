<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table ='enrollments';
    protected $primaryKey = 'id';
    protected $fillable =[
        'enroll_no',
        'batch_id',
        'stu_id',
        'join_date',
        "fee"
       

    ];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class,'stu_id','id');
    }
    public function batch(){
        return $this->belongsTo(Batch::class);
    }
 
}
