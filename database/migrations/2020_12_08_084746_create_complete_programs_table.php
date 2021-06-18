<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompleteProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete_programs', function (Blueprint $table) {
            $table->id();
            $table->date('deadlines')->commit('Сроки');
            $table->string('shape')->commit('Форма');
            $table->string('naming')->commit('Наименование');
            $table->string('coach')->commit('Тренер');
            $table->integer('volume_in_hours')->commit('Обьём в часах');
            $table->longText('description')->commit('Описание');
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
        Schema::dropIfExists('complete_programs');
    }
}
