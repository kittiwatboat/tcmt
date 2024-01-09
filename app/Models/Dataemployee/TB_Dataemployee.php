<?php

namespace App\Models\Dataemployee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Dataemployee extends Model
{
    use HasFactory;
    protected $table = 'tb_dataemployee';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'date',
        'image',
        'prefix_name',
        'first_name',
        'last_name',
        'address',
        'employee_ID',
        'scan_code',
        'bank',
        'bank_No',
        'rate',
        'job_No',
        'WO_No',
        'enter_period',
        'leave_period',
        'enter_real',
        'leave_real',
        'ot',
        'Midday_break',
        'confined_space',
        'On_shift',
        'special',
        'allowance',
        'allowance_special',
        'car_fare',
        'tax',
        'Residual_wages',
        'social_security',
        'advance_payment',
        'deduction_advance_payment',
        'extra_wages',
    ];
}
