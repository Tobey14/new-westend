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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('amount');
            $table->string('referred_by')->nullable();
            $table->string('ticket_id')->unique();
            $table->foreignId('agent_id')->nullable();
            $table->string('status')->default('played');
            $table->string('amount_won')->default('0');
            $table->boolean('paid')->default(0);
            $table->string('referral_earning')->default('0');
            $table->foreignId('purchase_id')->nullable();
            $table->foreignId('approved_by')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
