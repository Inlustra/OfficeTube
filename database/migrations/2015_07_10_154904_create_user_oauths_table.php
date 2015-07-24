<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOauthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauths', function (Blueprint $table) {
            $table->unsignedInteger("id");
            $table->unsignedInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('service');
            $table->primary(['service', 'id']);
            $table->dateTime('expires_at');
            $table->string('token');
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
        Schema::drop('oauths');
    }
}
