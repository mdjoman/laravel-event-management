<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardmodels', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('category_id');
            $table->text('model_code')->nullable();
            $table->text('model_hight')->nullable();
            $table->text('model_Price')->nullable();
            $table->text('lDescription')->nullable();
            $table->text('image')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('cardmodels');
    }
}
