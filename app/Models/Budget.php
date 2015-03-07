<?php

namespace Balthazar\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'budgets';

	protected $primaryKey = 'idbudget';

}
