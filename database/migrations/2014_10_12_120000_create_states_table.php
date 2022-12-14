<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'states',
            function (Blueprint $table) {
                $table->id();
                $table->string('name', 150)->comment('Estado');
                $table->string('uf', 2)->comment('UF');
            }
        );
        db_comment_table('states', 'Estados');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
