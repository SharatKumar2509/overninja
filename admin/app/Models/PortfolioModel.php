<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model {

	protected $table = 'portfolio';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'client', 'service', 'introduction', 'requirement', 'challenge', 'solution', 'features', 'project_image', 'screen1', 'screen2', 'screen3', 'screen4', 'screen5', 'reviewer', 'designation', 'review', 'created_on'];

}

?>