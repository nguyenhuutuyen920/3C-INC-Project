<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Device;
use App\Models\Field;
use App\Models\Home;
use App\Models\Introduce;
use App\Models\News;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Supplier;
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
    public function index(Request $request)
    {
        $fields = Field::with(['categories'])->get();
        $cats = Category::all()->groupBy('FieldParentID');
        $products = Product::orderBy("ProductID","DESC")->paginate(4);
        $devices = Device::orderBy("DeviceID","DESC")->paginate(8);
        $news = News::orderBy('NewsID','ASC')->paginate(8);
        return view("pages.home",compact("news","products","cats","fields","devices"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact(){
        $fields = Field::all();
        return view("pages.contact",compact('fields'));
    }
    public function introduce(){
        $fields = Field::all();
        return view("pages.introduce",compact('fields'));
    }
    public function project_info(Project $project)
    {
            $fields = Field::all();
            $projects = Project::orderBy('ProjectID','DESC')->paginate(4);
            return view("pages.projects.project_info",compact("project","projects","fields"));
    }
    public function device(Device $device,Field $field)
    {
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $field->load('categories.supplier');
        return view("pages.device", compact("field", "defaultField", "fields","device"));
    }
    public function project()
    {
            $fields = Field::all();
            $projects = Project::paginate(7);
            return view("pages.projects.project",compact("projects","fields"));
    }
        
    public function news(News $new){
        $fields = Field::all();
        $news = News::orderBy('NewsID','DESC')->paginate();
        return view("pages.news.new",compact("news","new","fields"));
    }
    
    public function new_content(News $new){
        $fields = Field::all();
        $news = News::orderBy('NewsID','DESC')->paginate(4);
        return view("pages.news.new_content",compact("new","news","fields"));
    }
    
    // public function service(){
    //     $fields = Field::all();
    //     $services = Service::all();
    //     return view("pages.service",compact("services","fields"));
    // }
    public function category(Field $field){
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $field->load('categories.supplier');
        $products = Product::all();
        return view("pages.category", compact("products","field", "defaultField", "fields"));
    }
    public function getProductBySupplier(Supplier $supplier,Field $field,Category $category) {
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $products = $category->$supplier->products;
        $supplier->load(['products']);
        // dd($products);
        return view('pages.product',compact('products', "defaultField",'fields','field'));
    }
    public function field(Field $field)
    {
        $devices = Device::all();
        $news = News::orderBy('NewsID','DESC')->paginate(4);
        $project = Project::orderBy('ProjectID','DESC')->paginate(1);
        $projects = Project::all();
        $products = Product::all();
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $field->load('categories.supplier');
        return view("pages.field", compact("field", "defaultField", "fields","products","projects","project","news","devices"));
    }
    public function linhvuc(Field $field)
    {
        $devices = Device::all();
        $news = News::orderBy('NewsID','DESC')->paginate(4);
        $project = Project::orderBy('ProjectID','DESC')->paginate(1);
        $projects = Project::all();
        $products = Product::all();
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $field->load('categories.supplier');
        return view("pages.field", compact("field", "defaultField", "fields","products","projects","project","news","devices"));
    }
    public function automation(Request $request,Field $field,Category $category){
        $defaultField = 1;
        $fields = Field::with('categories.devices')->get();
        $field->load('categories.devices');
        // $devices = $category->devices;
        // $category->load(['devices']);

        $devices = Device::where('CategoryID', $request->id)->get();
        // dd($devices);
        return view("pages.automation", compact("field", "defaultField", "fields","devices"));
    }
    public function vienthongxaylap(Request $request,Field $field,Category $category){
        $defaultField = 1;
        $fields = Field::with('categories.devices')->get();
        $field->load('categories.devices');
        // $devices = $category->devices;
        // $category->load(['devices']);

        $devices = Device::where('CategoryID', $request->id)->get();
        // dd($devices);
        return view("pages.vienthongxaylap", compact("field", "defaultField", "fields","devices"));
    }
    public function doluong (Request $request,Field $field,Category $category){
        $defaultField = 1;
        $fields = Field::with('categories.devices')->get();
        $field->load('categories.devices');
        // $devices = $category->devices;
        // $category->load(['devices']);

        $devices = Device::where('CategoryID', $request->id)->get();
        // dd($devices);
        return view("pages.doluong", compact("field", "defaultField", "fields","devices"));
    }
    public function product_info(Product $product,Field $field){
        $defaultField = 1;
        $fields = Field::with('categories.supplier')->get();
        $field->load('categories.supplier');
        return view("pages.product_info",compact("fields","product", "defaultField","field"));
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
            "SenderName"=> "required|",
            "SenderEmail"=> "required|",
            "ContactTitle"=> "required|",
            "ContactContent"=> "required|"
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