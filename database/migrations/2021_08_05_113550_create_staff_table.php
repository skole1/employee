<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->nullable();
            $table->string('file');
            $table->string('psn_no');
            $table->string('nin_no');
            $table->string('grade_level');
            $table->string('mda');
            $table->string('dob');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('phone_number');
            $table->string('email');
            $table->string('state');
            $table->string('lga');
            $table->string('ward');
            $table->string('home_town');
            $table->text('residential_address');
            $table->string('next_kin_name');
            $table->string('next_kin_phone');
            $table->string('next_kin_address');
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
        Schema::dropIfExists('staff');
    }
}
