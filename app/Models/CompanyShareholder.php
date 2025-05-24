<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyShareholder extends Model
{
    protected $fillable = [
        'company_id',
        'share_holder_name',
        'share_holder_position',
        'share_holder_phone_number',
    ];
    public function company_information()
    {
        return $this->belongsTo(CompanyInformation::class, 'company_id');
    }
}
