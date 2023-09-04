<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $blogModel = new BlogModel();

        $blogs = $blogModel->orderBy('created_on', 'DESC')->findAll();
        $data['blogs'] = $blogs;

        return view('blog', $data);
    }
}
