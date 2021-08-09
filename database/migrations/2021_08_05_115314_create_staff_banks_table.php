<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->foreignId('staff_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('bvn_no');
            $table->string('account_no');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('payment_type');
            $table->string('sort_code');
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
        Schema::dropIfExists('staff_banks');
    }
}
