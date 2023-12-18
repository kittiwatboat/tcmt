<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_employee', function (Blueprint $table) {
            $table->id();
            $table->text('employee_ID')->nullable();
            $table->text('scan_code')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('job_No')->nullable();
            $table->text('WO_No')->nullable();
            $table->text('address')->nullable();
            $table->text('bank_No')->nullable();
            $table->text('bank')->nullable();
            $table->text('On_shift')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_employee');
    }
}
