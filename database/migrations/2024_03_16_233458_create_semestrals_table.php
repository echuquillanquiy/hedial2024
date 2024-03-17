<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestrals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('examen1')->default('Nitrógeno ureico; cuantitativo (Urea sérica)');
            $table->string('cod_ex1', 6)->default('84520');
            $table->string('urea_pre', 3)->nullable();
            $table->string('urea_post', 3)->nullable();

            $table->string('examen2')->default('Hematocrito');
            $table->string('cod_ex2', 6)->default('85014');
            $table->string('hto', 4)->nullable();

            $table->string('examen3')->default('Hemoglobina');
            $table->string('cod_ex3', 6)->default('85018');
            $table->string('hb', 4)->nullable();

            $table->string('examen4')->default('Perfil de electrolitos (Cloro, Sodio y Potasio).');
            $table->string('cod_ex4', 6)->default('80051');
            $table->string('cloro', 6)->nullable();
            $table->string('sodio', 6)->nullable();
            $table->string('potasio', 6)->nullable();

            $table->string('examen5')->default('Dosaje de Fósforo inorgánico (fosfato)');
            $table->string('cod_ex5', 6)->default('84100');
            $table->string('fosforo', 6)->nullable();

            $table->string('examen6')->default('Dosaje de Calcio; total');
            $table->string('cod_ex6', 6)->default('82310');
            $table->string('calcio', 6)->nullable();

            $table->string('examen7')->default('Aspartato amino transferasa (AST) (SGOT)');
            $table->string('cod_ex7', 6)->default('84450');
            $table->string('tgo', 6)->nullable();

            $table->string('examen8')->default('Alanina amino transferasa (ALT) (SGPT)');
            $table->string('cod_ex8', 6)->default('84460');
            $table->string('tgp', 6)->nullable();

            $table->string('examen9')->default('Dosaje de Albumina, suero, plasma o sangre total');
            $table->string('cod_ex9', 6)->default('82040');
            $table->string('Albumina', 6)->nullable();

            $table->string('examen10')->default('Dosaje de fosfata alcalina');
            $table->string('cod_ex10', 6)->default('84075');
            $table->string('fosfata_alcalina', 6)->nullable();

            $table->string('examen11')->default('Dosaje de Hierro');
            $table->string('cod_ex11', 6)->default('83540');
            $table->string('hierro', 6)->nullable();

            $table->string('examen12')->default('Dosaje de Ferritina');
            $table->string('cod_ex12', 6)->default('82728');
            $table->string('Ferritina', 6)->nullable();

            $table->string('examen13')->default('Dosaje de Transferina');
            $table->string('cod_ex13', 6)->default('84466');
            $table->string('Transferina', 6)->nullable();

            $table->string('examen14')->default('Dosaje de Paratohormona (hormona paratiroidea)');
            $table->string('cod_ex14', 6)->default('83970');
            $table->string('Paratohormona' , 6)->nullable();

            $table->string('examen15')->default('Anticuerpos; HIV-1 y HIV-2, analisis unico');
            $table->string('cod_ex15', 6)->default('86703');
            $table->string('hiv', 6)->nullable();

            $table->string('examen16')->default('Prueba de sifilis; anticuerpo no treponemico; cualitativo');
            $table->string('cod_ex16', 6)->default('86592');
            $table->enum('sifilis', ['REACTIVO', 'NO REACTIVO'])->default('NO REACTIVO');

            $table->string('examen17')->default('Deteccion de antigenos de hepatitis B antigeno de superficie (HBsAb)');
            $table->string('cod_ex17', 6)->default('87340');
            $table->string('antigeno_hbsab', 8)->nullable();

            $table->string('examen18')->default('Anticuerpo contra el antigeno de superficie de la hepatitis B (HBsAb)');
            $table->string('cod_ex18', 6)->default('86706');
            $table->string('anticuerpo_hbsab', 8)->nullable();

            $table->string('examen19')->default('Anticuerpo contra el antigeno de la nucleocapside de la hepatitis B (HBcAb) total');
            $table->string('cod_ex19', 6)->default('86704');
            $table->string('core_hbsab', 8)->nullable();

            $table->string('examen20')->default('Anticuerpo contra la hepatitis C');
            $table->string('cod_ex20', 6)->default('86803');
            $table->string('hepatitis_c', 8)->nullable();

            $table->string('examen21')->default('Anticuerpo para HTLV 1');
            $table->string('cod_ex21', 6)->default('86687');
            $table->string('htlv', 8)->nullable();

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
        Schema::dropIfExists('semestrals');
    }
}
