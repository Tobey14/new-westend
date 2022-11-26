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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('amount');
            $table->foreignId('agent_id')->nullable();
            $table->string('transaction_id');
            $table->string('platform');
            $table->foreignId('funded_referral_id')->nullable();
            $table->string('status')->default('processing');
            $table->foreignId('purchase_id')->nullable();
            $table->foreignId('funding_id')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
