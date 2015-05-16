<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name', 60)->nullable();
            $table->string('username', 40)->unique();
            $table->string('location', 100)->nullable();
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->integer('locked')->default(0);
			$table->rememberToken();
            $table->enum('role', ['user', 'contributor', 'admin', 'superadmin'])->default('user');
			$table->timestamps();
            $table->timestamp('expired_at');
            $table->timestamp('last_login');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
