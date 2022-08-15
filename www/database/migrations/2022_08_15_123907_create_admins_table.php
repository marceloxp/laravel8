<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            // add name max length 150 unique comment "Nome"
            $table->string('name', 150)->unique()->comment('Nome');
            // add email max length 150 unique comment "Email"
            $table->string('email', 150)->unique()->comment('Email');
            // add password max length 255 comment "Senha"
            $table->string('password', 255)->comment('Senha');
            // add status ["Ativo", "Inativo"] comment "Status"
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo')->comment('Status');
            $table->timestamps();
            // add soft delete
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
