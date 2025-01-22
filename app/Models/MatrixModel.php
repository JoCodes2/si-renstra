<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatrixModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_matrix';
    protected $fillable = [
        'id',
        'category',
        'description',
        'created_at',
        'updated_at',
    ];
}
