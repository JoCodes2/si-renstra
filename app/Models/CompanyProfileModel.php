<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyProfileModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_company_profile';
    protected $fillable = [
        'id',
        'category',
        'question',
        'answer',
        'created_at',
        'updated_at'
    ];
    public function activity(): HasMany
    {
        return $this->hasMany(ActivityModel::class, 'id_company_profile');
    }
}
