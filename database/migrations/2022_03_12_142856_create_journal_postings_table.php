<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journal_entry_id');     
            $table->unsignedBigInteger('chart_of_account_id');     
            $table->unsignedBigInteger('accounting_period_id');     
            $table->enum('type',['credit','debit']);
            $table->float('amount');
            $table->float('updated_balance');
            $table->timestamps();

             $table->foreign('journal_entry_id')->references('id')->on('journal_entries');
            $table->foreign('chart_of_account_id')->references('id')->on('chart_of_accounts');
            $table->foreign('accounting_period_id')->references('id')->on('chart_of_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_postings');
    }
}
