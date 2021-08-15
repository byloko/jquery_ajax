<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersWalletDetailsModel extends Model {
	
	protected $table = 'users_wallet_details';

	static public function get_single($id)
	{
		return self::find($id);
	}
	
}

?>