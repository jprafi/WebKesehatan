<?php

// app/Models/Medicine.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicine';

    protected $fillable = [
        'name',
        'price',
        'count',
        'code',
        'description',
        'IMG_url',
    ];
}
