<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id', false);
            $table->integer('family_id', false);
            $table->integer('fund_id', false);
            $table->double('amount');
            $table->enum('type', ['Cash', 'Check', 'Credit Card', 'Online Giving']);
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
        Schema::dropIfExists('offerings');
    }
}
