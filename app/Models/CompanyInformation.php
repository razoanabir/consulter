<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    protected $fillable = [
        'company_name',
        'founder_name',
        'founder_phone_number',
        'founder_email',
        'company_address',
        'registration_date',
        'company_license_number',
        'trade_license_number',
        'trade_license_registration_date',
        'trade_license_expiration_date',
        'tin_number',
        'bin_number',
        'service_status',
        'slug',
    ];
    public function shareholders()
    {
        return $this->hasMany(CompanyShareholder::class, 'company_id');
    }
}
