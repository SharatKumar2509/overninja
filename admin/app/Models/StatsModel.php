<?php

namespace App\Models;

use CodeIgniter\Model;

class StatsModel extends Model {

	protected $table = 'statistics';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'completed', 'running', 'clients', 'updated_on'];

}

?>