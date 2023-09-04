<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model {

	protected $table = 'blogs';

	protected $primaryKey = 'id';
	
	protected $allowedFields = ['id', 'path', 'title', 'author', 'meta_desc', 'blog_image', 'alt_text', 'content', 'likes', 'comments', 'created_on'];

}

?>