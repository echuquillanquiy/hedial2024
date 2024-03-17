<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrimestralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimestrals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('examen1')->default('Nitrógeno ureico; cuantitativo (Urea sérica)');
            $table->string('cod_ex1')->default('84520');
            $table->string('urea_pre')->nullable();
            $table->string('urea_post')->nullable();

            $table->string('examen2')->default('Hematocrito');
            $table->string('cod_ex2')->default('85014');
            $table->string('hto')->nullable();

            $table->string('examen3')->default('Hemoglobina');
            $table->string('cod_ex3')->default('85018');
            $table->string('hb')->nullable();

            $table->string('examen4')->default('Perfil de electrolitos (Cloro, Sodio y Potasio).');
            $table->string('cod_ex4')->default('80051');
            $table->string('cloro')->nullable();
            $table->string('sodio')->nullable();
            $table->string('potasio')->nullable();

            $table->string('examen5')->default('Dosaje de Fósforo inorgánico (fosfato)');
            $table->string('cod_ex5')->default('84100');
            $table->string('fosforo')->nullable();

            $table->string('examen6')->default('Dosaje de Calcio; total');
            $table->string('cod_ex6')->default('82310');
            $table->string('calcio')->nullable();

            $table->string('examen7')->default('Aspartato amino transferasa (AST) (SGOT)');
            $table->string('cod_ex7')->default('84450');
            $table->string('tgo')->nullable();

            $table->string('examen8')->default('Alanina amino transferasa (ALT) (SGPT)');
            $table->string('cod_ex8')->default('84460');
            $table->string('tgp')->nullable();

            $table->string('examen9')->default('Dosaje de Albumina, suero, plasma o sangre total');
            $table->string('cod_ex9')->default('82040');
            $table->string('Albumina')->nullable();

            $table->string('examen10')->default('Dosaje de fosfata alcalina');
            $table->string('cod_ex10')->default('84075');
            $table->string('fosfata_alcalina')->nullable();

            $table->string('examen11')->default('Dosaje de Hierro');
            $table->string('cod_ex11')->default('83540');
            $table->string('hierro')->nullable();

            $table->string('examen12')->default('Dosaje de Ferritina');
            $table->string('cod_ex12')->default('82728');
            $table->string('Ferritina')->nullable();

            $table->string('examen13')->default('Dosaje de Transferina');
            $table->string('cod_ex13')->default('84466');
            $table->string('Transferina')->nullable();

            $table->string('examen14')->default('Dosaje de Paratohormona (hormona paratiroidea)');
            $table->string('cod_ex14')->default('83970');
            $table->string('Paratohormona')->nullable();

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
        Schema::dropIfExists('trimestrals');
    }
}
