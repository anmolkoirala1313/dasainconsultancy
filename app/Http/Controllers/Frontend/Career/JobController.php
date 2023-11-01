<?php

namespace App\Http\Controllers\Frontend\Career;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\Activity\PackageCategory;
use App\Models\Backend\Activity\PackageRibbon;
use App\Models\Backend\Activity\Package;
use App\Models\Backend\Career\Job;
use App\Services\Frontend\JobSearchService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class JobController extends BackendBaseController
{
    protected string $page          = 'frontend.';
    protected string $base_route    = 'frontend.job.';
    protected string $view_path     = 'frontend.job.';
    protected string $panel         = 'Job';
    protected string $folder_name   = 'job';
    protected string $page_title, $page_method, $image_path;
    protected object $model;
    protected JobSearchService $jobSearchService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JobSearchService $jobSearchService)
    {
        $this->model              = new Job();
        $this->image_path         = public_path(DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'package');
        $this->jobSearchService   = $jobSearchService;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $this->page_method      = 'index';
        $this->page_title       = 'All '.$this->page;
        $data                   = $this->getCommonData();
        $data['rows']           = $this->model->active()->descending()->paginate(6);
        if(!$data['rows']){
            abort(404);
        }
        return view($this->loadResource($this->view_path.'index'), compact('data'));
    }


    public function getCommonData(): array
    {
        return [];
    }


    public function search(Request $request)
    {
        $this->page_method      = 'search';
        $this->page_title       = 'Search '.$this->page;
        $data                   = $this->getCommonData();
        $data['rows']           = $this->jobSearchService->getSearchedJobs($request);

        return view($this->loadResource($this->view_path.'search'), compact('data'));
    }

    public function show($slug)
    {
        $this->page_method          = 'show';
        $this->page_title           = $this->page.' Details';
        $data                       = $this->getCommonData();
        $data['row']                = $this->model->where('slug',$slug)->first();
        $data['related_activity']   = $this->model->active()->descending()->whereNotIn('id',[$data['row']->id])->where('package_category_id',$data['row']->package_category_id)->limit(6)->get();

        if(!$data['row']){
            abort(404);
        }
        return view($this->loadResource($this->view_path.'show'), compact('data'));
    }
}
