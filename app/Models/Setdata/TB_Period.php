<?php

namespace App\Models\Setdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Period extends Model
{
    use HasFactory;
    protected $table = 'tb_period';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
