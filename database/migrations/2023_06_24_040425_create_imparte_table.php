<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('imparte', function (Blueprint $table) {
            $table->string('c_codclase', 5);
            $table->string('p_idprofesor', 10);
            $table->unsignedBigInteger('a_idaula');

            $table->primary(['c_codclase', 'p_idprofesor', 'a_idaula']);
            $table->timestamps();
        });

        Schema::table('imparte', function (Blueprint $table) {
            $table->foreign('c_codclase')->references('codclase')->on('clase')->onDelete('cascade');
            $table->foreign('p_idprofesor')->references('id')->on('profesor')->onDelete('cascade');
            if (Schema::hasTable('aula')) {
                $table->foreign('a_idaula')->references('id')->on('aula')->onDelete('cascade');
            }
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impartes');
    }
};
