<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Field;
use App\Models\Home;
use App\Models\Introduce;
use App\Models\News;
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
        $projects = Project::orderBy("ProjectID","DESC")->paginate(10);
        $news = News::orderBy('NewsID','DESC')->paginate(10);
        return view("pages.home",compact("news","projects","cats","fields"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact(){
        $fields = Field::all();
<<<<<<< Updated upstream
        return view("pages.contact",compact('fields'));
=======
        return view("pages.contact",compact("fields"));
>>>>>>> Stashed changes
    }

    public function news(){
        $fields = Field::all();
        $news = News::paginate(7);
        return view("pages.new",compact("news","fields"));
    }
    public function new_content(News $new){
        $fields = Field::all();
        $news = News::orderBy('NewsID','DESC')->paginate(4);
        return view("pages.new_content",compact("new","news","fields"));
    }
    public function service(){
        $fields = Field::all();
        $services = Service::all();
        return view("pages.service",compact("services","fields"));
    }
    public function getProductBySupplier(Supplier $supplier) {
        $field = Field::find(1);    
        $fields = Field::all();
        $products = $supplier->load(['products']);
        return view('pages.product',compact('products','fields','field'));
    }
    public function field(Field $field)
    {
        $fields = Field::with('categories')->get(); // Lấy tất cả các trường với các danh mục liên quan
        $field->load('categories.products');
        return view("pages.field", compact("field", "fields"));
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
