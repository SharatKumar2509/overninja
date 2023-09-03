<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') == "true") {
            return redirect()->to(base_url()."blog");
        }
        else {
            return redirect()->to(base_url()."login");
        }
    }
}
