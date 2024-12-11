<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testmodel extends Model
{
    protected $table = "info";

    protected $fillable = [
        'item',
        'des'
    ];
    }
