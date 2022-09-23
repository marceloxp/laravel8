<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 24)->unique()->comment('Código');
            $table->integer('attempts')->comment('Tentativas');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name', 'deleted_at']);
        });
        db_comment_table('codes', 'Códigos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
