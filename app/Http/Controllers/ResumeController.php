<?php

namespace App\Http\Controllers;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume.index');
    }

    public function resume()
    {
        return view('resume.resume');
    }

    public function services()
    {
        return view('resume.services');
    }

    public function portfolio()
    {
        return view('resume.portfolio');
    }

    public function portfolio_details()
    {
        return view('resume.portfolio_details');
    }
}
