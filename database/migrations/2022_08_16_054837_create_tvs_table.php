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
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_name');
            $table->string('video_google_drive_link');
            $table->string('reporter');
            $table->text('main_description');
            $table->text('bkash_no');
            $table->string('tv_name');
            $table->string('divisions');
            $table->string('districts');
            $table->string('police_station');
            $table->integer('newspaper_count')->default(0);
            $table->integer('newspaper_price');
            $table->integer('newspaper_bkash_percentage');
            $table->float('content_price',10,2);
            $table->text('bkash_transaction_id');
            $table->string('content_price_word');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('tvs');
    }
};
