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

    public function add()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        return view('add-case-study');
    }

    public function add_case_study()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $fileName = time();
        $filePath = "/var/www/html/uploads/portfolio";

        $project_image = $this->request->getFile('project_image');
        $project_image_name = $fileName.".".$project_image->getClientExtension();
        $project_image->move($filePath, $project_image_name);

        $screen1 = $this->request->getFile('screen1');
        $screen1_name = $fileName."1.".$screen1->getClientExtension();
        $screen1->move($filePath, $screen1_name);

        $screen2 = $this->request->getFile('screen2');
        $screen2_name = $fileName."2.".$screen2->getClientExtension();
        $screen2->move($filePath, $screen2_name);

        $screen3 = $this->request->getFile('screen3');
        $screen3_name = $fileName."3.".$screen3->getClientExtension();
        $screen3->move($filePath, $screen3_name);

        $screen4 = $this->request->getFile('screen4');
        $screen4_name = $fileName."4.".$screen4->getClientExtension();
        $screen4->move($filePath, $screen4_name);

        $screen5 = $this->request->getFile('screen5');
        $screen5_name = $fileName."5.".$screen5->getClientExtension();
        $screen5->move($filePath, $screen5_name);

        $row = [
            "client"        =>  $this->request->getPost('client'),
            "service"       =>  $this->request->getPost('service'),
            "introduction"  =>  $this->request->getPost('introduction'),
            "requirement"   =>  $this->request->getPost('requirement'),
            "challenge"     =>  $this->request->getPost('challenge'),
            "solution"      =>  $this->request->getPost('solution'),
            "features"      =>  $this->request->getPost('features'),
            "project_image" =>  $project_image_name,
            "screen1"       =>  $screen1_name,
            "screen2"       =>  $screen2_name,
            "screen3"       =>  $screen3_name,
            "screen4"       =>  $screen4_name,
            "screen5"       =>  $screen5_name,
            "reviewer"      =>  $this->request->getPost('reviewer'),
            "designation"   =>  $this->request->getPost('designation'),
            "review"        =>  $this->request->getPost('review')
        ];

        $portfolioModel = new PortfolioModel();

        $portfolioModel->insert($row);

        $this->session->setFlashdata('success', 'New case study added successfuly.');
        return redirect()->to(base_url()."case-study");
    }

    public function edit($id)
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $portfolioModel = new PortfolioModel();

        $portfolio = $portfolioModel->where('id', $id)->findAll();

        if(sizeof($portfolio) > 0) {
            $data['portfolio'] = $portfolio[0];
            return view('edit-case-study', $data);
        }
        else {
            return redirect()->to(base_url()."case-study");
        }
    }

    public function add_case_study()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $portfolioModel = new PortfolioModel();

        $portfolio = $portfolioModel->where('id', $id)->findAll();

        if(sizeof($portfolio) > 0) {

            $row = [
                "client"        =>  $this->request->getPost('client'),
                "service"       =>  $this->request->getPost('service'),
                "introduction"  =>  $this->request->getPost('introduction'),
                "requirement"   =>  $this->request->getPost('requirement'),
                "challenge"     =>  $this->request->getPost('challenge'),
                "solution"      =>  $this->request->getPost('solution'),
                "features"      =>  $this->request->getPost('features'),
                "reviewer"      =>  $this->request->getPost('reviewer'),
                "designation"   =>  $this->request->getPost('designation'),
                "review"        =>  $this->request->getPost('review')
            ];

            $fileName = time();
            $filePath = "/var/www/html/uploads/portfolio";

            $project_image = $this->request->getFile('project_image');
            if($project_image->isValid()) {
                $project_image_name = $fileName.".".$project_image->getClientExtension();
                $project_image->move($filePath, $project_image_name);

                unlink($filePath."/".$portfolio['project_image']);

                $row['project_image'] = $project_image_name;
            }

            $screen1 = $this->request->getFile('screen1');
            if($screen1->isValid()) {
                $screen1_name = $fileName."1.".$screen1->getClientExtension();
                $screen1->move($filePath, $screen1_name);

                unlink($filePath."/".$portfolio['screen1']);

                $row['screen1'] = $screen1_name;
            }

            $screen2 = $this->request->getFile('screen2');
            if($screen2->isValid()) {
                $screen2_name = $fileName."2.".$screen2->getClientExtension();
                $screen2->move($filePath, $screen2_name);

                unlink($filePath."/".$portfolio['screen2']);

                $row['screen2'] = $screen2_name;
            }

            $screen3 = $this->request->getFile('screen3');
            if($screen3->isValid()) {
                $screen3_name = $fileName."3.".$screen3->getClientExtension();
                $screen3->move($filePath, $screen3_name);

                unlink($filePath."/".$portfolio['screen3']);

                $row['screen3'] = $screen3_name;
            }

            $screen4 = $this->request->getFile('screen4');
            if($screen4->isValid()) {
                $screen4_name = $fileName."4.".$screen4->getClientExtension();
                $screen4->move($filePath, $screen4_name);

                unlink($filePath."/".$portfolio['screen4']);

                $row['screen4'] = $screen4_name;
            }

            $screen5 = $this->request->getFile('screen5');
            if($screen5->isValid()) {
                $screen5_name = $fileName."5.".$screen5->getClientExtension();
                $screen5->move($filePath, $screen5_name);

                unlink($filePath."/".$portfolio['screen5']);

                $row['screen5'] = $screen5_name;
            }

            $portfolioModel->insert($row);

            $this->session->setFlashdata('success', 'Case study edited successfuly.');
            return redirect()->to(base_url()."case-study");

        }
        else {
            $this->session->setFlashdata('failed', 'Something went wrong. Please try again.');
            return redirect()->to(base_url()."case-study");
        }
    }

    public function delete($id)
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $portfolioModel = new PortfolioModel();

        $item = $portfolioModel->where('id', $id)->findAll();
        
        if(sizeof($item) > 0) {
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['project_image']);
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['screen1']);
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['screen2']);
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['screen3']);
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['screen4']);
            unlink('/var/www/html/uploads/portfolio/'.$item[0]['screen5']);
            
            $portfolioModel->where('id', $id)->delete();
            
            $this->session->setFlashdata('success', 'Case study deleted successfuly.');
            return redirect()->to(base_url()."case-study");
        }
        else {
            $this->session->setFlashdata('failed', 'Something went wrong. Please try again.');
            return redirect()->to(base_url()."case-study");
        }
    }
}
