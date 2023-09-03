<?php

namespace App\Controllers;

use App\Models\TestimonialModel;

class Testimonial extends BaseController
{
    public function index()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $testimonialModel = new TestimonialModel();

        $testimonials = $testimonialModel->orderBy('created_on', 'DESC')->findAll();
        $data['testimonials'] = $testimonials;

        return view('testimonial', $data);
    }

    public function add()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        return view('add-testimonial');
    }

    public function add_testimonial()
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $row = [
            "fullname"      =>  $this->request->getPost('fullname'),
            "designation"   =>  $this->request->getPost('designation'),
            "company"       =>  $this->request->getPost('company'),
            "review"        =>  $this->request->getPost('review')
        ];

        $testimonialModel = new TestimonialModel();

        $testimonialModel->insert($row);

        $this->session->setFlashdata('success', 'Testimonial added successfuly.');
        return redirect()->to(base_url()."testimonial");
    }

    public function edit($id)
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $testimonialModel = new TestimonialModel();

        $testimonial = $testimonialModel->where('id', $id)->findAll();

        if(sizeof($testimonial) > 0) {
            $data['testimonial'] = $testimonial[0];
            return view('edit-testimonial', $data);
        }
        else {
            return redirect()->to(base_url()."testimonial");
        }
    }

    public function edit_testimonial($id)
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $row = [
            "fullname"      =>  $this->request->getPost('fullname'),
            "designation"   =>  $this->request->getPost('designation'),
            "company"       =>  $this->request->getPost('company'),
            "review"        =>  $this->request->getPost('review')
        ];

        $testimonialModel = new TestimonialModel();

        $item = $testimonialModel->where('id', $id)->findAll();

        if(sizeof($item) > 0) {
            $testimonialModel->update($id, $row);
            $this->session->setFlashdata('success', 'Testimonial edited successfuly.');
            return redirect()->to(base_url()."testimonial");
        }
        else {
            $this->session->setFlashdata('failed', 'Something went wrong. Please try again.');
            return redirect()->to(base_url()."testimonial");
        }
    }

    public function delete($id)
    {
        if($this->session->get('logged_in') != "true") {
            return redirect()->to(base_url()."login");
        }

        $testimonialModel = new TestimonialModel();

        $item = $testimonialModel->where('id', $id)->findAll();
        
        if(sizeof($item) > 0) {
            $testimonialModel->where('id', $id)->delete();
            $this->session->setFlashdata('success', 'Testimonial deleted successfuly.');
            return redirect()->to(base_url()."testimonial");
        }
        else {
            $this->session->setFlashdata('failed', 'Something went wrong. Please try again.');
            return redirect()->to(base_url()."testimonial");
        }
    }
}
