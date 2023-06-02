<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 3;
    const MANAGER = 2;
    const USER = 1;
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
