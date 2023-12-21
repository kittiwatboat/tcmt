<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_onshift extends Model
{
    use HasFactory;
    protected $table = 'tb_on_shift';
    protected $primaryKey = 'id';
    protected $fillable = [
        'shift_time',
        'start_work',
        'end_work',
        'last_name',
        'created_at',
        'updated_at',
    ];
}
