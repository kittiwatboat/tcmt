<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToTbDataemployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_dataemployee', function (Blueprint $table) {
            $table->text('enter_period')->nullable()->after('WO_No');
            $table->renameColumn('Period', 'leave_period');
            $table->text('enter_real')->nullable()->after('Period');
            $table->text('leave_real')->nullable()->after('enter_real');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_dataemployee', function (Blueprint $table) {
            $table->dropColumn('enter_period');
            $table->renameColumn('leave_period', 'Period');
            $table->dropColumn('enter_real');
            $table->dropColumn('leave_real');
        });
    }
}
