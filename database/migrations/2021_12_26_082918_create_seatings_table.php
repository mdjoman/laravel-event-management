<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seatings', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook', 64)->unique();
            $table->string('twitter')->nullable();
            $table->string('Site_name')->nullable();
            $table->text('siteDescription')->nullable();     
            $table->text('About')->unique();
            $table->text('Privacy')->nullable();
            $table->text('logo')->nullable();
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
        Schema::dropIfExists('seatings');
    }
}
