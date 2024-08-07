<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('ProjectID', 'ASC')->paginate(10);
        return view('admin.project.index', compact('projects',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProjectTitle'=> 'required|unique:projects',
            'BiddingPackage' => 'required|',
            'ConstructionName' => 'required|',
            'Abstract' => 'required|max:100',
            'ProjectContent' => 'required|',
            'ProjectImage' => 'required|',
            'Investors' => 'required|',
            'PricePackage' => 'required|',
        ]);
        if ($request->hasFile('ProjectImage')) {
            
            $uploadedFile = $request->file('ProjectImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            $uploadedFile->move("ProjectImage/",$imageName);
        }
        $project = new Project();
        $project->ProjectTitle = $request->input('ProjectTitle');
        $project->BiddingPackage = $request->input('BiddingPackage');
        $project->ConstructionName = $request->input('ConstructionName');
        $project->Abstract = $request->input('Abstract');
        $project->ProjectContent = $request->input('ProjectContent');
        $project->ProjectImage = 'ProjectImage/' . $imageName;
        $project->Investors = $request->input('Investors');
        $project->PricePackage = $request->input('PricePackage');

        $project->save();
        return redirect()->route('project.index')->with('success','Thêm dự án thành công!');
    }
    public function projectupload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media/ProjectImage'), $fileName);

            $url = asset('media/ProjectImage/' . $fileName);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'ProjectTitle'=> 'required|',
            'BiddingPackage' => 'required|',
            'ConstructionName' => 'required|',
            'Abstract' => 'required|max:100',
            'ProjectContent' => 'required|',
            'ProjectImage' => 'required|',
            'Investors' => 'required|',
            'PricePackage' => 'required|',
        ]);
        if ($request->hasFile('ProjectImage')) {

            $uploadedFile = $request->file('ProjectImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($project->ProjectImage) {
                $oldImagePath = public_path('ProjectImage/' . $project->ProjectImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("ProjectImage/",$imageName);
        }
        $project->ProjectTitle = $request->input('ProjectTitle');
        $project->BiddingPackage = $request->input('BiddingPackage');
        $project->ConstructionName = $request->input('ConstructionName');
        $project->Abstract = $request->input('Abstract');
        $project->ProjectContent = $request->input('ProjectContent');
        $project->ProjectImage = 'ProjectImage/' . $imageName;
        $project->Investors = $request->input('Investors');
        $project->PricePackage = $request->input('PricePackage');

        $project->update();

        return redirect()->route('project.index')->with('success', 'Project updated successfully!');

    }
    public function editupload(Request $request)
{
    if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;

        // Kiểm tra và xóa tệp cũ nếu tồn tại
        $oldFilePath = public_path('media/ProjectImage/' . $fileName);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }

        // Di chuyển tệp mới vào thư mục đã chỉ định
        $request->file('upload')->move(public_path('media/ProjectImage/'), $fileName);

        $url = asset('media/ProjectImage/' . $fileName);

        return response()->json([
            'uploaded' => true,
            'url' => $url
        ]);
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
