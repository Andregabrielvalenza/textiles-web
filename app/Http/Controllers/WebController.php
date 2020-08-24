<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    
    public function productoGalery()
    {
        return view('producto-galery');
    }
    
    public function ourCommunities()
    {
        return view('our-communities');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function projects()
    {
        return view('projects');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function workshops()
    {
        return view('workshops');
    }
    
    public function specialActivity()
    {
        return view('specia-activity');
    }
    
    public function workshopDetail()
    {
        return view('workshop-detail');
    }
    
    public function projectsDetail()
    {
        return view('projects-detail');
    }
    
    public function blogArtículo()
    {
        return view('blog-artículo');
    }
    
    public function contactPersonalizeProducto()
    {
        return view('contact-personalize-producto');
    }
    
    public function donationCheckout()
    {
        return view('donation-checkout');
    }
    
    public function workshopsignUp()
    {
        return view('workshop-sign-up');
    }
    
    public function purchaseSummery()
    {
        return view('purchase-summery');
    }
    
    public function checkuot()
    {
        return view('checkuot');
    }
    
    public function aboutusOurteam()
    {
        return view('about-us–our-team');
    }
    
    public function communityDetail()
    {
        return view('community-detail');
    }
    
    public function productDetail()
    {
        return view('product-detail');
    }
    
    public function aboutUs()
    {
        return view('about-us');
    }
    
    public function getInvolved()
    {
        return view('get-involved');
    }
    
    public function thankyouforDonating()
    {
        return view('thankyou-for-donating');
    }
    
    public function thankyouforRegistration()
    {
        return view('thank-you-for-registration');
    }
    
    public function thankyouforyouPurchase()
    {
        return view('thank-you-for-you-purchase');
    }
    
    public function andeanTextiles()
    {
        return view('andean-textiles');
    }
}
