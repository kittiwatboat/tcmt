<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDataemployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dataemployee', function (Blueprint $table) {
            $table->id();
            $table->text('date')->nullable();                           //วันที่
            $table->text('image')->nullable();                          //รูปพนักงาน
            $table->text('prefix_name')->nullable();                    //คำนำหน้าชื่อ
            $table->text('first_name')->nullable();                     //ชื่อ
            $table->text('last_name')->nullable();                      //นามสกุล
            $table->text('address')->nullable();                        //ที่อยู่
            $table->text('employee_ID')->nullable();                    //รหัสพนักงาน
            $table->text('scan_code')->nullable();                      //รหัสสแกนนิ้ว
            $table->text('bank')->nullable();                           //ธนาคาร
            $table->text('bank_No')->nullable();                        //เลขบัญชี
            $table->text('rate')->nullable();                           //เรทค่าแรงต่อชั่วโมง
            $table->text('job_No')->nullable();
            $table->text('WO_No')->nullable();
            $table->text('Period')->nullable();                         //ช่วงกะ
            $table->text('ot')->nullable();                             //โอที
            $table->text('Midday_break')->nullable();                   //ผ่าเที่ยง
            $table->text('confined_space')->nullable();                 //ที่อับอากาศ
            $table->text('On_shift')->nullable();                       //เข้ากะ
            $table->text('special')->nullable();                        //พิเศษ
            $table->text('allowance')->nullable();                      //เบี้ยเลี้ยง
            $table->text('allowance_special')->nullable();              //เบี้ยเลี้ยงพิเศษ
            $table->text('car_fare')->nullable();                       //ค่ารถ
            $table->text('tax')->nullable();                            //ภาษี
            $table->text('Residual_wages')->nullable();                 //ค่าแรงตกค้าง
            $table->text('social_security')->nullable();                //ประกันสังคม
            $table->text('advance_payment')->nullable();                //เบิกล่วงหน้า
            $table->text('deduction_advance_payment')->nullable();      //หักเบิกล่วงหน้า
            $table->text('extra_wages')->nullable();                    //ค่าจ้างพิเศษ
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
        Schema::dropIfExists('tb_dataemployee');
    }
}
