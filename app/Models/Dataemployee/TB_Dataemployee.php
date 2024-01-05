<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Dataemployee extends Model
{
    use HasFactory;
    protected $table = 'tb_dataemployee';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
