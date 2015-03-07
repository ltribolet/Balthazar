<?php

namespace Balthazar\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'accounts';

	protected $primaryKey = 'idaccount';

	public function account_lines()
	{
		return $this->hasMany('Balthazar\Models\AccountLine', 'idaccount', 'idaccount');
	}

	public function recurrent_lines()
	{
		return $this->hasMany('Balthazar\Models\RecurrentLine', 'idaccount', 'idaccount');
	}

	public function budgets()
	{
		return $this->hasMany('Balthazar\Models\Budget', 'idaccount', 'idaccount');
	}
}
