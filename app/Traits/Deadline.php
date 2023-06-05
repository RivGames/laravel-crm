<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait Deadline
{
    public function deadline(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::make($value)->format('m/d/Y')
        );
    }
}
