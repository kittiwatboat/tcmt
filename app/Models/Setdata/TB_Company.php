<?php

namespace App\Models\Setdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Company extends Model
{
    use HasFactory;
    protected $table = 'tb_company';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
