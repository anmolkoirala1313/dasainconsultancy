<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Frontend\BookFlightRequest;
use App\Http\Requests\Frontend\CustomerInquiryRequest;
use App\Mail\ContactDetail;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\Career\Job;
use App\Models\Backend\Client;
use App\Models\Backend\CustomerInquiry;
use App\Models\Backend\FlightInquiry;
use App\Models\Backend\Homepage\Slider;
use App\Models\Backend\Homepage\Welcome;
use App\Models\Backend\ManagingDirector;
use App\Models\Backend\News\Blog;
use App\Models\Backend\Page\PageSectionGallery;
use App\Models\Backend\Service;
use App\Models\Backend\Setting;
use App\Models\Backend\Team;
use App\Models\Backend\Testimonial;
use App\Models\Backend\Activity\Package;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use function Termwind\render;

class HomePageController extends BackendBaseController
{
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.';
    protected string $view_path     = 'frontend.';
    protected string $page          = '';
    protected string $page_title, $page_method, $image_path;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data                       = $this->getCommonData();
        $data['sliders']            = Slider::active()->descending()->get();
        $data['testimonials']       = Testimonial::active()->descending()->limit(8)->get();
        $data['services']           = Service::active()->latest()->take(4)->get();
        $data['blogs']              = Blog::active()->descending()->latest()->take(3)->get();
        $data['jobs']               = Job::active()->descending()->latest()->take(6)->get();
        $data['homepage']           = Welcome::first();
        $data['director']           = ManagingDirector::active()->orderBy('order', 'asc')->get();
        $data['map']                = Setting::first()->google_map;
        $data['clients']            = Client::active()->descending()->latest()->take(10)->get();

        return view($this->loadResource($this->view_path.'homepage'), compact('data'));
    }

    public function getCommonData(): array
    {
        return [];
    }


    public function team()
    {
        $this->page_method   = 'index';
        $this->page_title    = 'Our Team';
        $this->page          = 'Team';
        $data                = $this->getCommonData();
        $data['rows']        = Team::active()->orderBy('order','desc')->get();

        return view($this->loadResource($this->view_path.'page.team'), compact('data'));
    }

    public function testimonial()
    {
        $this->page_method     = 'index';
        $this->page_title      = 'Our Testimonial';
        $this->page            = 'Testimonial';
        $data                  = $this->getCommonData();
        $data['rows']          = Testimonial::active()->descending()->paginate(9);

        return view($this->loadResource($this->view_path.'page.testimonial'), compact('data'));
    }



}
