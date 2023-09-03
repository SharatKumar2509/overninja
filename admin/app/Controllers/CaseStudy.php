<?php

namespace App\Controllers;

class CaseStudy extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        return view('case-study');
    }
}
