<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_activity';
    protected $fillable = [
        'id',
        'id_company_profile',
        'activity_name',
        'supervisor_name',
        'devisi',
        'pic',
        'target',
        'realization',
        'achievement',
        'deadline',
        'count_down',
        'status_activity',
        'completion_date',
        'description',
        'created_at',
        'updated_at',
    ];

    public function companyProfile(): BelongsTo
    {
        return $this->belongsTo(CompanyProfileModel::class, 'id_company_profile');
    }
}
