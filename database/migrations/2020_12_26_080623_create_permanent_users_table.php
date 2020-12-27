<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermanentUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanent_users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('surename')->nullable();
            $table->boolean('active')->default(1);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('realm')->nullable();
            $table->string('realm_id')->nullable();
            $table->string('profile')->nullable();
            $table->string('profile_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('permanent_users');
    }
}
