<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model {

	protected $table = 'portfolio';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'client', 'service', 'introduction', 'challenge', 'approach', 'project_image', 'created_on'];

}

?>