<?php

namespace App\Controllers;

use App\Models\StatsModel;
use App\Models\PortfolioModel;
use App\Models\BlogModel;
use App\Models\TestimonialModel;

class Home extends BaseController
{
    public function index()
    {
        $data['meta_title'] = "Overninja: Your Gateway to Limitless Possibilities";
        $data['meta_desc'] = "";

        $portfolioModel = new PortfolioModel();
        $portfolios = $portfolioModel->orderBy('created_on', 'DESC')->findAll();
        $data['portfolios'] = $portfolios;

        $testimonialModel = new TestimonialModel();
        $testimonials = $testimonialModel->orderBy('created_on', 'DESC')->findAll();
        $data['testimonials'] = $testimonials;

        return view('home', $data);
    }

    public function about()
    {
        $data['meta_title'] = "Overninja: Where innovation meets passion";
        $data['meta_desc'] = "";

        $statsModel = new StatsModel();
        $stats = $statsModel->findAll()[0];
        $data['stats'] = $stats;

        $testimonialModel = new TestimonialModel();
        $testimonials = $testimonialModel->orderBy('created_on', 'DESC')->findAll();
        $data['testimonials'] = $testimonials;

        return view('about', $data);
    }

    public function services()
    {
        $data['meta_title'] = "Growth and success with tailored services";
        $data['meta_desc'] = "Our team of in-house technical experts is available to help resolve a diverse array of technical issues spanning various technologies, elevate your journey to success through personalized growth services";

        $testimonialModel = new TestimonialModel();
        $testimonials = $testimonialModel->orderBy('created_on', 'DESC')->findAll();
        $data['testimonials'] = $testimonials;

        return view('services', $data);
    }

    public function web_development()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('web-development', $data);
    }

    public function mobile_app_development()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('mobile-app-development', $data);
    }

    public function ecommerce_development()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('ecommerce-development', $data);
    }

    public function it_support()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('it-support', $data);
    }

    public function digital_marketing()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('digital-marketing', $data);
    }

    public function game_development()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('game-development', $data);
    }

    public function portfolio()
    {
        $data['meta_title'] = "Showcase of extraordinary and remarkable achievements";
        $data['meta_desc'] = "Dive into our diverse range of case studies that highlight our expertise and commitment to finding effective strategies. Learn how we turn insights into action.";

        $portfolioModel = new PortfolioModel();
        $portfolios = $portfolioModel->orderBy('created_on', 'DESC')->findAll();
        $data['portfolios'] = $portfolios;

        return view('portfolio', $data);
    }

    public function portfolio_detail($id)
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->where('id', $id)->findAll();
        
        if(sizeof($portfolio) <= 0) {
            return redirect()->to(base_url()."case-study");
        }
        else {
            $data['portfolio'] = $portfolio;

            $portfolios = $portfolioModel->where('id!='.$id)->orderBy('created_on', 'DESC')->findAll();
            $data['portfolios'] = $portfolios;

            return view('portfolio-detail', $data);
        }
    }

    public function industries()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "Explore how we bring innovation to various sectors. From technology to healthcare, we partner with industries to drive positive change.";

        return view('industries', $data);
    }

    public function blogs($page="")
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        if($page=="") {
            return redirect()->to(base_url()."blogs/1");
        }

        $start = 0;
        $end = 0;
        $itemCount = 20;

        $pageStart = 0;
        $pageEnd = 0;
        $currentPage = $page;
        $pages = [];

        $start = ($page-1) * $itemCount;

        $blogModel = new BlogModel();

        $blogs = $blogModel->orderBy('created_on', 'DESC')->findAll();
        $blogsCount = sizeof($blogs);

        if($blogsCount <= $start) {
            if($page == 1) {
                $blogs = [];
                $start = 0;
                $end = 0;
            }
            else {
                return redirect()->to(base_url()."blogs/1");
            }
        }
        else {
            $blogs = array_slice($blogs, $start, $itemCount);
            $start = $start + 1;
            $end = $start + sizeof($blogs);

            $pageStart = 1;
            $pageEnd = ceil($blogsCount/$itemCount);

            array_push($pages, $currentPage);

            if(($currentPage-1) >= $start) {
                array_push($pages, $currentPage-1);

                if(($currentPage-2) >= $start) {
                    array_push($pages, $currentPage-2);
                    if(($currentPage+1) <= $end) {
                        array_push($pages, $currentPage+1);
                        if(($currentPage+2) <= $end) {
                            array_push($pages, $currentPage+2);
                        }
                        else if(($currentPage-3) >= $start) {
                            array_push($pages, $currentPage-3);
                        }
                    }
                    else if(($currentPage-3) >= $start) {
                        array_push($pages, $currentPage-3);
                        if(($currentPage-4) >= $start) {
                            array_push($pages, $currentPage-4);
                        }
                    }
                }
                else if(($currentPage+1) <= $end) {
                    array_push($pages, $currentPage+1);
                    if(($currentPage+2) <= $end) {
                        array_push($pages, $currentPage+2);
                        if(($currentPage+3) <= $end) {
                            array_push($pages, $currentPage+3);
                        }
                    }
                }
            }
            else if(($currentPage+1) <= $end) {
                array_push($pages, $currentPage+1);
                if(($currentPage+2) <= $end) {
                    array_push($pages, $currentPage+2);
                    if(($currentPage+3) <= $end) {
                        array_push($pages, $currentPage+3);
                        if(($currentPage+4) <= $end) {
                            array_push($pages, $currentPage+4);
                        }
                    }
                }
            }

            sort($pages);
        }
        
        $data['blogs'] = $blogs;
        $data['start'] = $start;
        $data['end'] = $end;
        $data['pageStart'] = $pageStart;
        $data['pageEnd'] = $pageEnd;
        $data['currentPage'] = $currentPage;
        $data['pages'] = $pages;

        return view('blogs', $data);
    }

    public function blog()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('blog', $data);
    }

    public function career()
    {
        $data['meta_title'] = "Join our team of skilled ninjas";
        $data['meta_desc'] = "Become a valuable member of our proficient ninja team, where your expertise will seamlessly blend with our collective skills.";

        return view('career', $data);
    }

    public function hire_developer()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "Hire Top Developers for Your Projects! Our skilled developers bring your ideas to life. From web to app development, find the perfect developer for your needs.";

        return view('hire-developer', $data);
    }

    public function terms()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('terms-and-conditions', $data);
    }

    public function privacy()
    {
        $data['meta_title'] = "";
        $data['meta_desc'] = "";

        return view('privacy-policy', $data);
    }

    public function test()
    {
        return 1;
    }

}
