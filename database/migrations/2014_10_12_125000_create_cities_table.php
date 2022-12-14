<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'cities',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('state_id')->comment('Estado');
                $table->string('name', 150)->comment('Cidade');
                $table->timestamps();
                $table->softDeletes();

                $table->index('deleted_at');
                $table->foreign('state_id')->references('id')->on('states');
            }
        );
        db_comment_table('cities', 'Cidades');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
