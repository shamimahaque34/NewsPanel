<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstituteType;


class InstituteTypeController extends Controller
{
    protected  $instituteTypeName;

    public function index()
    {
        return view('backend.institute-type-name.manage',[
            'instituteTypeNames'=>InstituteType::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    public function create()
    {
        return view('backend.institute-type-name.add');
    }

    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        InstituteType::instituteTypeNameSave($request);
        return redirect()->route('institute-type-name-info.index')->with('success','instituteType Name Info Create successfully');
    }


    public function edit($id)
    {
           return view('backend.institute-type-name.edit', ['instituteTypeName' => InstituteType::find($id)]);
        
    }

   
    public function update(Request $request, $id)
    {
        InstituteType::updateData($request,$id);
        return redirect()->route('institute-type-name-info.index')->with('success','institute Type Name Update successfully');
    }

    public function destroy($id)
    {
        $this->instituteTypeName=InstituteType::find($id);
        $this->instituteTypeName->delete();
        return redirect()->route('institute-type-name-info.index')->with('success',' institute Type Name Delete successfully');
    }
}
