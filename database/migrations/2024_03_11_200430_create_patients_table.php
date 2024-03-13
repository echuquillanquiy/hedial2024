<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('lastname');
            $table->string('surname');
            $table->string('dni');
            $table->string('code')->unique();
            $table->string('birthday');
            $table->string('age');
            $table->string('first_dial')->nullable();
            $table->string('shift')->nullable();
            $table->string('dry_weight');
            $table->string('hcl');
            $table->enum('access1', ['INJ', 'FAV', 'CVCL', 'CVCLP', 'CVCT']);
            $table->enum('access2', ['INJ', 'FAV', 'CVCL', 'CVCLP', 'CVCT']);
            $table->string('filter')->nullable();
            $table->string('time_dial')->nullable();
            $table->string('discount_weight')->nullable();
            $table->string('hepa')->nullable();
            $table->enum('serology', ['REACTIVO', 'NO REACTIVO'])->default('NO REACTIVO');
            $table->enum('state', ['ACTIVO', 'NO ACTIVO'])->default('ACTIVO');

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
        Schema::dropIfExists('patients');
    }
}
