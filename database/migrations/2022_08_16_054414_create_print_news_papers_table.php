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
        Schema::create('print_news_papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('caption');
            $table->text('main_description');
            $table->text('version');
            $table->text('page');
            $table->string('reporter');
            $table->text('bkash_no');
            $table->text('image');
            $table->string('newspaper_name');
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
        Schema::dropIfExists('print_news_papers');
    }
};
