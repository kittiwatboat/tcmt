<?php

namespace App\Models\Setdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Employee extends Model
{
    use HasFactory;
    protected $table = 'tb_employee';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
