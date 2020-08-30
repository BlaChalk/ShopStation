<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyRecords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('commodity_id')->nullable();
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('discount');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('commodity_id')->references('id')->on('commodities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buyRecords', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['commodity_id']);
        });

        Schema::dropIfExists('buyRecords');
    }
}
