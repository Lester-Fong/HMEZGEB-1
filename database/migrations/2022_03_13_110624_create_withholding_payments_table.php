<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithholdingPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withholding_payments', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('payment_reference_id');
            $table->unsignedBigInteger('accounting_period_id');
            $table->date('date');
            $table->float('total_paid');
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->foreign('payment_reference_id')->references('id')->on('payment_references');
            $table->foreign('accounting_period_id')->references('id')->on('accounting_periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withholding_payments');
    }
}
