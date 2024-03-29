<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('room_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('hall_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('triage_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('procedure_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
