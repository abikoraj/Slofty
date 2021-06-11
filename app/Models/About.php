<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'subHeading',
        'title1',
        'description1',
        'title2',
        'description2',
        'title3',
        'description3'
    ];
}
