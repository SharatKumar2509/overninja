<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model {

	protected $table = 'portfolio';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'client', 'service', 'project_image', 'introduction', 'requirement', 'challenge', 'solution', 'features', 'reviewer', 'designation', 'review', 'created_on'];

}

?>