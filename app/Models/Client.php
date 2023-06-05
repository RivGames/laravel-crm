<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $contact_name
 * @property string $contact_email
 * @property string $contact_phone_number
 * @property string $company_name
 * @property string $company_address
 * @property string $company_city
 * @property string $company_zip
 * @property int $company_vat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCompanyAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCompanyCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCompanyVat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCompanyZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereContactPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
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
