<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_company', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();                   //รูปบริษัท
            $table->text('name')->nullable();                    //ชื่อบริษัท
            $table->text('companyaddressthai')->nullable();      //ที่อยู่บริษัทไทย
            $table->text('companyaddresseng')->nullable();       //ที่อยู่บริษัทอังกฤษ
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
        Schema::dropIfExists('tb_company');
    }
}
