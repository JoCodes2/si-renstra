<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartModel extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'tb_smart';
    protected $fillable = [
        'id',
        'category',
        'description',
        'created_at',
        'updated_at',
    ];
}
