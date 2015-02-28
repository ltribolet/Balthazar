<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budgets', function(Blueprint $table)
		{
			$table->increments('idbudget');
			$table->integer('idaccount');
			$table->float('goal');
			$table->integer('length');
			$table->enum('status', array('on', 'off', 'completed'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('budgets', function(Blueprint $table)
		{
			Schema::drop('users');
		});
	}

}
