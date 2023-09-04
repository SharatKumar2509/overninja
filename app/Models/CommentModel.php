<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model {

	protected $table = 'blog_comments';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'blog_id', 'fullname', 'email', 'comment', 'timestamp'];

}

?>