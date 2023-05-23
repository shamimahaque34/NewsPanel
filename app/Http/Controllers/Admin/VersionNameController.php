<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstituteType;
use App\Models\InstituteName;
use App\Models\VersionName;

class VersionNameController extends Controller
{
    protected  $versionName;

    public function index()
    {
        return view('backend.version-name.manage',[
            'versionNames'=>versionName::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    public function create()
    {
        return view('backend.version-name.add',[
            'instituteTypes'=>InstituteType::where('id','2')->get(),
            'instituteNames'=>InstituteName::where('id','dsec')->get(),
        ]);

    }

    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        VersionName::versionNameSave($request);
        return redirect()->route('version-name-info.index')->with('success','version Name Info Create successfully');
    }


    public function edit($id)
    {
           return view('backend.version-name.edit', 
           [
            'instituteTypes'=>InstituteType::all(),
            'instituteNames'=>InstituteName::all(),
            'versionName' => VersionName::find($id)
          ]);
        
    }

   
    public function update(Request $request, $id)
    {
        VersionName::updateData($request,$id);
        return redirect()->route('version-name-info.index')->with('success','version  Name Update successfully');
    }

    public function destroy($id)
    {
        $this->versionName=VersionName::find($id);
        $this->versionName->delete();
        return redirect()->route('version-name-info.index')->with('success',' version Name Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        VersionName::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Version Name deleted successfully."]);
         
    }

    public function getInstituteNameByInstituteType()
    {
        $this->id = $_GET['id'];
        $this->instituteNames = InstituteName::where('type_id', $this->id)->get();
        return response()->json($this->instituteNames);
    }
}
