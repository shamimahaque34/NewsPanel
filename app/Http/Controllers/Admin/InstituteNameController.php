<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstituteType;
use App\Models\InstituteName;


class InstituteNameController extends Controller
{
    protected  $instituteName;

    public function index()
    {
        return view('backend.institute-name.manage',[
            'instituteNames'=>InstituteName::orderBy('id', 'desc')->take(500)->get(),

        ]);
           
    }

    public function create()
    {
        return view('backend.institute-name.add',[
            'instituteTypes'=>InstituteType::all()]);
    }

    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        InstituteName::instituteNameSave($request);
        return redirect()->route('institute-name-info.index')->with('success','institute Name Info Create successfully');
    }


    public function edit($id)
    {
           return view('backend.institute-name.edit', 
           [
            'instituteTypes'=>instituteType::all(),
            'instituteName' => InstituteName::find($id)
          ]);
        
    }

   
    public function update(Request $request, $id)
    {
        InstituteName::updateData($request,$id);
        return redirect()->route('institute-name-info.index')->with('success','institute  Name Update successfully');
    }

    public function destroy($id)
    {
        $this->instituteName=InstituteName::find($id);
        $this->instituteName->delete();
        return redirect()->route('institute-name-info.index')->with('success',' institute Name Delete successfully');
    }
}
