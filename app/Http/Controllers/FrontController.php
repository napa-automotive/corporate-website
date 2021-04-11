<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use App\Models\Thought;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show front home-page
     */
    public function index()
    {
        $teams = Team::all();
        $thoughts = Thought::all();
        $partners = Partner::all();
        return view('front.index', ['teams' => $teams, 'thoughts' => $thoughts, 'partners' => $partners]);
    }

    /**
     * Show front about-page
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * Show front new-page
     */
    public function new()
    {
        return view('front.new');
    }

    /**
     * Show front team-page
     */
    public function team()
    {
        $teams = Team::all();
        return view('front.team', ['teams' => $teams]);
    }

    /**
     * Show front services-page
     */
    public function services()
    {
        $services = Service::all();
        return view('front.services', ['services' => $services]);
    }

    /**
     * Show front faq-page
     */
    public function faq()
    {
        return view('front.faq');
    }

    /**
     * Show front testimonial-page
     */
    public function testimonial()
    {
        return view('front.testimonial');
    }

    /**
     * Show front project-page
     */
    public function project()
    {
        return view('front.project');
    }

    /**
     * Show front contact-page
     */
    public function contact()
    {
        return view('front.contact');
    }
}
