<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model {

	protected $table = 'testimonials';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'fullname', 'company', 'designation', 'review', 'created_on'];

}

?>