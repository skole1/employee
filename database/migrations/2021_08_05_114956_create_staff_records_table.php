<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->foreignId('staff_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('department');
            $table->string('unit');
            $table->string('section');
            $table->string('dofa');
            $table->string('confirm_date');
            $table->string('last_promotion_date');
            $table->string('appointment_type');
            $table->string('current_grade_level');
            $table->string('present_rank');
            $table->string('present_cadre');
            $table->string('present_station');
            $table->enum('status', ['0', '1']);
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
        Schema::dropIfExists('staff_records');
    }
}
