<?php

namespace Balthazar\Models;

use Illuminate\Database\Eloquent\Model;

class AccountLine extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'account_lines';

	protected $primaryKey = 'idaccount_line';

}
