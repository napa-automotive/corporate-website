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
        //$this->middleware('auth');
    }

    /**
     * Show front home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = Team::all();
        $thoughts = Thought::all();
        $partners = Partner::all();
        return view('front.index', ['teams' => $teams, 'thoughts' => $thoughts, 'partners' => $partners]);
    }
    /**
     * Show front about-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {

        return view('front.about');
    }
    /**
     * Show front new-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new()
    {

        return view('front.new');
    }
    /**
     * Show front team-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function team()
    {
        $teams = Team::all();
        return view('front.team', ['teams' => $teams]);
    }
    /**
     * Show front services-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $services = Service::all();
        return view('front.services', ['services' => $services]);
    }
    /**
     * Show front faq-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {

        return view('front.faq');
    }
    /**
     * Show front testimonial-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function testimonial()
    {

        return view('front.testimonial');
    }
    /**
     * Show front project-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function project()
    {

        return view('front.project');
    }
    /**
     * Show front contact-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {

        return view('front.contact');
    }
}
