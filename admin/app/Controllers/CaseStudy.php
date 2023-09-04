<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

class CaseStudy extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $portfolioModel = new PortfolioModel();

        $projects = $portfolioModel->orderBy('created_on', 'DESC')->findAll();
        $data['projects'] = $projects;

        return view('case-study', $data);
    }
}
