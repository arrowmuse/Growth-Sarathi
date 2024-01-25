<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function services()
    {
        return view('front.services');
    }
     public function aboutus()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function team()
    {
        return view('team');
    }
    public function consulting()
    {
        return view('consulting');
    }
    public function howcanwehelp()
    {
        return view('howcanwehelp');
    }
    public function solutions()
    {
        return view('solutions');
    }
    public function operationalexcellence()
    {
        return view('operationalexcellence');
    }
    public function marketingservices()
    {
        return view('marketingservices');
    }
    public function fundraising()
    {
        return view('fundraising');
    }
    public function bookmeeting()
    {
        return view('bookmeeting');  
    }
}
