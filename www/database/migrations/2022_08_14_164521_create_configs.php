<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->comment('Nome');
            $table->string('value')->comment('Valor');
            $table->integer('flags')->nullable()->comment('Flags');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo')->comment('Status');
            $table->timestamps();
            $table->softDeletes();
            $table->index('name');
            $table->index('status');
            $table->index(['name', 'status']);
            $table->index(['name','deleted_at']);
        });
        db_comment_table('configs', 'Configurações');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
