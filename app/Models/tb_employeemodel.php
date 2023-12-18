<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_employeemodel extends Model
{
    use HasFactory;
    protected $table = 'tb_employee';
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_ID',
        'scan_code',
        'first_name',
        'last_name',
        'job_No',
        'WO_No',
        'address',
        'bank_No',
        'bank',
        'On_shift',
        'created_at',
        'updated_at',
    ];
}
