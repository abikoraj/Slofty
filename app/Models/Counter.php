<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    protected $fillable = [
        'background',
        'title1',
        'icon1',
        'count1',
        'title2',
        'icon2',
        'count2',
        'title3',
        'icon3',
        'count3',
        'title4',
        'icon4',
        'count4'
    ];
}
