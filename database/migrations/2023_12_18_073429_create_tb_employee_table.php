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
            $table->text('image')->nullable();                          //รูปพนักงาน
            $table->text('prefix_name')->nullable();                    //คำนำหน้าชื่อ
            $table->text('first_name')->nullable();                     //ชื่อ
            $table->text('last_name')->nullable();                      //นามสกุล
            $table->text('address')->nullable();                        //ที่อยู่
            $table->text('employee_ID')->nullable();                    //รหัสพนักงาน
            $table->text('scan_code')->nullable();                      //รหัสสแกนนิ้ว
            $table->text('bank')->nullable();                           //ธนาคาร
            $table->text('bank_No')->nullable();                        //เลขบัญชี
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
