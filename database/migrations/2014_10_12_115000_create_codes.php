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
            // create name unique max 24 with comment Código
            $table->string('name', 24)->unique()->comment('Código');
            // create attempts integer with comment Tentativas
            $table->integer('attempts')->comment('Tentativas');

            $table->timestamps();
            // add soft delete
            $table->softDeletes();

            // create unique index name and deleted_at
            $table->unique(['name', 'deleted_at']);
        });
        // comment table codes as Códigos
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
