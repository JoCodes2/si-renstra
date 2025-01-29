<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GapModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_gap';
    protected $fillable = [
        'id',
        'id_swot',
        'current_state',
        'gap',
        'planing',
        'created_at',
        'updated_at',
    ];
    public function swot(): BelongsTo
    {
        return $this->belongsTo(SwotModel::class, 'id_swot');
    }
}
