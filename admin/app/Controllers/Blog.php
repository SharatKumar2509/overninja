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

    public function add()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        return view('add-blog');
    }

    public function add_blog()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $path = "";
        $blog_image = "";

        $file = $this->request->getFile('blog_image');
        if($file.isValid()) {
            $blog_image = time()".".$file.getClientExtension();
            $file->move('./uploads/blogs', $blog_image);
        }
        else {
            $this->session->setFlashdata('failed', 'Something went wrong. Please try again.');
            return redirect()->to(base_url()."blog");
        }

        $path = strtolower($this->request->getPost('title'));
        $path = str_replace(" ", "-", $path);
        $path = preg_replace('/[^a-zA-Z0-9_ -]/s','',$path);

        $row = [
            "path"          =>  $path,
            "title"         =>  $this->request->getPost('title'),
            "category"      =>  $this->request->getPost('category'),
            "author"        =>  $this->request->getPost('author'),
            "meta_desc"     =>  $this->request->getPost('meta_desc'),
            "blog_image"    =>  $blog_image,
            "alt_text"      =>  $this->request->getPost('alt_text'),
            "content"       =>  $this->request->getPost('content')
        ];

        $blogModel = new BlogModel();

        $blogModel->insert($row);

        $this->session->setFlashdata('success', 'New blog added successfuly.');
        return redirect()->to(base_url()."blog");
    }
}
