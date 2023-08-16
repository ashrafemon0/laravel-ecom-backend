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
        Schema::create('site_information', function (Blueprint $table) {
            $table->id();
            $table->text('about',5000);
            $table->text('purchase',5000);
            $table->text('refund',5000);
            $table->text('privacy',5000);
            $table->text('address',5000);
            $table->string('android_link');
            $table->string('ios_link');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('copywrite_text');
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
        Schema::dropIfExists('site_information');
    }
};
