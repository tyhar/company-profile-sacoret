<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('pages.project');
    }

    public function brandActivation()
    {
        return view('pages.projects.brand-activation');
    }

    public function eventPhotoshoot()
    {
        return view('pages.projects.event-photoshoot');
    }

    public function graphicDesign()
    {
        return view('pages.projects.graphic-design');
    }

    public function productBranding()
    {
        return view('pages.projects.product-branding');
    }

    public function socialMedia()
    {
        return view('pages.projects.social-media');
    }

    public function videography()
    {
        return view('pages.projects.videography');
    }
}
