<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_lines', function(Blueprint $table)
		{
			$table->increments('idaccount_line');
			$table->string('text');
			$table->enum('type', array('debit', 'credit'));
			$table->float('value');
			$table->date('date');
			$table->integer('idcategory')->nullable();
			$table->integer('idparent')->nullable();
			$table->integer('idaccount');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('account_lines', function(Blueprint $table)
		{
			Schema::drop('users');
		});
	}

}
