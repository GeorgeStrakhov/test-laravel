<?php

class Add {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->timestamps();
		});
		Schema::create('dones', function($table) {
			$table->increments('id');
			$table->string('user_id'); //which user this done belongs to
			$table->string('subject');
			$table->text('body');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('dones');
	}

}