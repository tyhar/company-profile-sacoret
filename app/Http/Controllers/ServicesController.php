<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.service');
    }

    public function brandActivation()
    {
        return view('pages.services.brand-activation');
    }

    public function graphicDesign()
    {
        return view('pages.services.graphic-design');
    }

    public function videography()
    {
        return view('pages.services.videography');
    }

    public function eventPhotoshoot()
    {
        return view('pages.services.event');
    }

    public function socialMedia()
    {
        return view('pages.services.social-media');
    }

    public function productBranding()
    {
        return view('pages.services.product-branding');
    }
}
