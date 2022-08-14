<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nome');
            $table->string('email')->comment('E-mail');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('Senha');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['name','deleted_at']);
            $table->unique(['email','deleted_at']);
        });
        db_comment_table('users', 'Usuários');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
		Schema::dropIfExists('users');
		Schema::enableForeignKeyConstraints();
    }
}
