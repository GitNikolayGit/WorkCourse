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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('date');           // год выпуска
            $table->string('num')->unique();   // госномер
            $table->string('malfunctions');    // неисправности
            $table->string('surname');         // владелец
            $table->string('firstName');
            $table->string('patronymic');
            $table->integer('brand_id');       // модель
            $table->integer('color_id');       // цвет
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
        Schema::dropIfExists('cars');
    }
};
