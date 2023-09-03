<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') == "true") {
            return redirect()->to(base_url()."blogs");
        }
        else {
            return redirect()->to(base_url()."login");
        }
    }

    public function blogs()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        return view('blogs');
    }
}
