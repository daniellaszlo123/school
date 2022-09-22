<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


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
            $table->id();//auto-increment, primary key, biginteger
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });

        //rekordok helye
        User::create(['name' => 'Klári', 'email' => 'diak1@gmail.com']);
        User::create(['name' => 'Pisti', 'email' => 'diak2@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
