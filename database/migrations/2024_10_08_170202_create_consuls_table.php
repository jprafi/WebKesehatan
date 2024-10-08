<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consuls', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->integer('phone');
            $table->string('address');
            $table->string('sympthom');
            $table->date('startdate');
            $table->longText('sympthom');
            $table->date('dateconsul');
            $table->string('ID_consul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consuls');
    }
};
