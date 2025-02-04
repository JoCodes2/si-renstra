<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResultModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tb_result_brainstorming';
    protected $fillable = [
        'id',
        'description',
        'category_brainstorming',
        'created_at',
        'updated_at',
    ];
}
