<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstituteType;
use App\Models\InstituteName;
use App\Models\VersionName;
use App\Models\PageName;

class PageNameController extends Controller
{
    protected  $pageName;

    public function index()
    {
        return view('backend.page-name.manage',[
            'pageNames'=>pageName::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    public function create()
    {
        return view('backend.page-name.add',[
            'instituteTypes'=>InstituteType::all(),
            'instituteNames'=>InstituteName::all(),
            'versionNames'  =>VersionName::all()

        ]);

    }

    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        PageName::pageNameSave($request);
        return redirect()->route('page-name-info.index')->with('success','Page Name Info Create successfully');
    }


    public function edit($id)
    {
           return view('backend.page-name.edit', 
           [
            'instituteTypes'=>InstituteType::all(),
            'instituteNames'=>InstituteName::all(),
            'versionNames'   => VersionName::all(),
            'pageName'      =>PageName::find($id),

          ]);
        
    }

   
    public function update(Request $request, $id)
    {
        PageName::updateData($request,$id);
        return redirect()->route('page-name-info.index')->with('success','Page  Name Update successfully');
    }

    public function destroy($id)
    {
        $this->pageName=PageName::find($id);
        $this->pageName->delete();
        return redirect()->route('page-name-info.index')->with('success',' Page Name Delete successfully');
    }

    public function getInstituteNameByInstituteType()
    {
        $this->id = $_GET['id'];
        $this->instituteNames = InstituteName::where('type_id', $this->id)->get();
        return response()->json($this->instituteNames);
    }


    public function getVersionNameByInstituteName()
    {
        $this->id = $_GET['id'];
        $this->versionNames = VersionName::where('institute_id', $this->id)->get();
        return response()->json($this->versionNames);
    }
}

