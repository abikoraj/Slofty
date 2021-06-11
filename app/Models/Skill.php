<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'subHeading',
        'description',
        'sideImage',
        'skill1',
        'progress1',
        'skill2',
        'progress2',
        'skill3',
        'progress3',
        'skill4',
        'progress4',
        'skill5',
        'progress5'
    ];
}
