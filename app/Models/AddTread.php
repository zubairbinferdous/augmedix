<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTread extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_tread',
        'unite_tread',
        'open_tread',
        'user_id',
    ];
}
