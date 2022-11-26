<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('referred_by')->nullable();
            $table->string('referral_code')->unique();
            $table->string('gender')->nullable();
            $table->integer('no_of_referrals')->default(0);
            $table->text('bank_details')->nullable();
            $table->string('state');
            $table->string('image_url')->nullable();
            $table->bigInteger('last_funded_amount')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('agents');
    }
};
