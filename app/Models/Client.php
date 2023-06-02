<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'company_name',
        'company_address',
        'company_city',
        'company_zip',
        'company_vat',
    ];

    protected function address(): Attribute
    {
        return Attribute::make(
            get: fn () => sprintf('%s %s %s %s %s',
                $this->company_zip,
                $this->company_city,
                $this->contact_email,
                $this->contact_phone_number,
                $this->company_address
            )
        );
    }

    protected function companyName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value)
        );
    }
}
