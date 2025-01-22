<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GapModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_gap';
    protected $fillable = [
        'id',
        'category',
        'description',
        'created_at',
        'updated_at',
    ];
}
