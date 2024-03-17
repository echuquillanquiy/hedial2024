<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimensualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimensuals', function (Blueprint $table) {
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
        Schema::dropIfExists('bimensuals');
    }
}
