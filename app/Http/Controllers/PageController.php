<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('page/home');
    }

    public function about()
    {
        return view('page/about');
    }

    public function contact()
    {
        return view('page/contact');
    }

    public function services()
    {
        return view('page/services');
    }

    public function pricing()
    {
        return view('page/pricing');
    }

    public function blog()
    {
        return view('page/blog');
    }

    public function blogDetails()
    {
        return view('page/blog-details');
    }

    public function portfolio()
    {
        return view('page/portfolio');
    }

    public function portfolioDetails()
    {
        return view('page/portfolio-details');
    }

    public function team()
    {
        return view('page/team');
    }

    public function testimonials()
    {
        return view('page/testimonials');
    }
}
