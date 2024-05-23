<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Introduce;
use App\Models\News;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $projects = Project::orderBy("ProjectID","DESC")->paginate(10);
        $news = News::orderBy('NewsID','DESC')->paginate(10);
        return view("pages.home",compact("news","projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact(){
        return view("pages.contact");
    }
    public function new(){
        $news = News::all();
        return view("pages.new",compact("news"));
    }
    public function new_content(){
        $news = News::all();
        return view("pages.new_content",compact("news"));
    }
    public function service(){
        $services = Service::all();
        return view("pages.service",compact("services"));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "SenderName"=> "required",
            "SenderEmail"=> "required",
            "ContactTitle"=> "required",
            "ContactContent"=> "required"
        ]);

        $data = $request->all();
        Contact::create($data);

        return redirect()->route("contact")->with("success","Liên hệ thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
