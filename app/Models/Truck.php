<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';

    protected $fillable = [
        'brand', 'year_made', 'user', 'users_count', 'comment'
    ];

}
