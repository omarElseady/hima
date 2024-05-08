<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'gender',
        'birth_date',
        'dept_id',
        'GPA',
        'email',
        'years_of_study'

    ];
}
