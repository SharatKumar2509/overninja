<?php

namespace App\Controllers;

use App\Models\StatsModel;

class Statistics extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $statsModel = new StatsModel();
        $stats = $statsModel->findAll();

        $data['stats'] = $stats[0];

        return view('statistics', $data);
    }

    public function edit()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $row = [
            "completed" =>  $this->request->getPost('completed'),
            "running" =>  $this->request->getPost('running'),
            "clients" =>  $this->request->getPost('clients')
        ];

        $statsModel = new StatsModel();
        $statsModel->update('1', $row);

        $this->session->setFlashdata('success', 'Statistics changed successfuly.');
        return redirect()->to(base_url()."statistics");
    }
}
