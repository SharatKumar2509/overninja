<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Account extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') == "true") {
            return redirect()->to(base_url()."blogs");
        }

        return view('login');
    }

    public function login()
    {
        if($this->session->get('logged_in') == "true") {
            return redirect()->to(base_url()."blogs");
        }

        $password = $this->request->getPost('password');

        $accountModel = new AccountModel();
        $user = $accountModel->where('password', $password)->findAll();

        if(sizeof($user) > 0) {
            $this->session->set('logged_in', 'true');
            return redirect()->to(base_url()."blogs");
        }
        else {
            $this->session->setFlashdata('result', 'failed');
            return redirect()->to(base_url()."login");
        }
    }

    public function logout()
    {
        $this->session->remove('logged_in');
        return redirect()->to(base_url()."login");
    }

    public function change_password()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url());
        }

        return view('change-password');
    }

    public function save_changes()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url());
        }

        $old = $this->request->getPost('old_password');
        $new = $this->request->getPost('new_password');
        $confirm = $this->request->getPost('confirm_password');

        if($new!=$confirm) {
            $this->session->setFlashdata('failed', 'Password mismatch. Please try again.');
            return redirect()->to(base_url()."change-password");
        }

        $accountModel = new AccountModel();
        
        $user = $accountModel->where('password', $old)->findAll();

        if(sizeof($user) > 0) {
            $accountModel->update($user[0]['id'], ["password" => $new]);
            $this->session->setFlashdata('success', 'Password changed successfuly.');
            return redirect()->to(base_url()."change-password");
        }
        else {
            $this->session->setFlashdata('failed', 'Incorrect Password. Please try again.');
            return redirect()->to(base_url()."change-password");
        }
    }

}
