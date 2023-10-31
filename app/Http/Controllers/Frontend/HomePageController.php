<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Requests\Frontend\BookFlightRequest;
use App\Http\Requests\Frontend\CustomerInquiryRequest;
use App\Mail\ContactDetail;
use App\Models\Backend\Activity\Country;
use App\Models\Backend\CustomerInquiry;
use App\Models\Backend\FlightInquiry;
use App\Models\Backend\Homepage\Slider;
use App\Models\Backend\Homepage\Welcome;
use App\Models\Backend\News\Blog;
use App\Models\Backend\Page\PageSectionGallery;
use App\Models\Backend\Service;
use App\Models\Backend\Setting;
use App\Models\Backend\Testimonial;
use App\Models\Backend\Activity\Package;
use Illuminate\Contracts\Support\Renderable;
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
    protected string $panel         = '';
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
        $data['services']           = Service::active()->descending()->get();
        $data['blogs']              = Blog::active()->descending()->latest()->take(3)->get();
        $data['homepage']           = Welcome::first();

        return view($this->loadResource($this->view_path.'homepage'), compact('data'));
    }

    public function getCommonData(): array
    {
        return [];
    }


    public function contact()
    {
        $this->page_method      = 'index';
        $this->page_title       = 'Contact us';
        $this->page            = 'Contact';
        $data                   = [];
        $data['setting_data']   = Setting::first();
        return view($this->loadResource($this->view_path.'page.contact_us'), compact('data'));
    }

    public function getFieldType()
    {
        $value   = \request()->type;
        $data    = $this->getCommonData();

        if($value){
            $rendered_view = view($this->view_path.'partials.national', compact('data'))->render();
        }else{
            $rendered_view = view($this->view_path.'partials.international')->render();
        }

       return response()->json(['rendered_view'=>$rendered_view]);
    }

    public function contactStore(CustomerInquiryRequest $request)
    {
        $data                   = $request->except(['_token']);
        $data['setting_data']   = Setting::first();
        $data['title']          = 'Contact us response';

        DB::beginTransaction();
        try {
            CustomerInquiry::create($request->all());

            if(!app()->environment('local')){
                Mail::to($data['setting_data']->email)->send(new ContactDetail($data));
            }

            Session::flash('success','Your message was submitted successfully');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error','Your message could not relayed at the moment. Something went wrong.');
        }

        return response()->json(route('frontend.contact-us'));
    }

    public function storeFlightBookInfo(BookFlightRequest $request)
    {
        dd($request->all());
        $data                   = $request->except(['_token']);
        $data['setting_data']   = Setting::first();
        $data['title']          = 'Flight inquiry details';

        DB::beginTransaction();
        try {
            FlightInquiry::create($request->all());

            if(!app()->environment('local')){
                Mail::to($data['setting_data']->email)->send(new ContactDetail($data));
            }

            Session::flash('success','Details about flight are sent. We will get back to you shortly.');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('error','Your message could not relayed at the moment. Something went wrong.');
        }

        return response()->json(route('frontend.home'));
    }

}
