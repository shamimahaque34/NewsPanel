<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstituteType;
use App\Models\InstituteName;
use App\Models\VersionName;
use App\Models\PageName;
use App\Models\Price;


class PriceController extends Controller
{
    protected  $price;

    public function index()
    {
        return view('backend.price.manage',[
            'prices'=>Price::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    public function create()
    {
        return view('backend.price.add',[
            'instituteTypes'=>InstituteType::all(),
            'instituteNames'=>InstituteName::all(),
            'versionNames'  =>VersionName::all(),
            'pageNames'     =>PageName::all()


        ]);

    }

    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'required',
            
        // ]);

        Price::priceSave($request);
        return redirect()->route('price-info.index')->with('success','Price Info Create successfully');
    }


    public function edit($id)
    {
           return view('backend.price.edit', 
           [
            'instituteTypes' =>InstituteType::all(),
            'instituteNames' =>InstituteName::all(),
            'versionNames'   => VersionName::all(),
            'pageNames'      =>PageName::all(),
            'price'         =>Price::find($id),

          ]);
        
    }

   
    public function update(Request $request, $id)
    {
        Price::updateData($request,$id);
        return redirect()->route('price-info.index')->with('success','Price Update successfully');
    }

    public function destroy($id)
    {
        $this->price=Price::find($id);
        $this->price->delete();
        return redirect()->route('price-info.index')->with('success',' Price Delete successfully');
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
        return response()->json( $this->versionNames);
    }

    public function getPageNameByVersionName()
    {
        $this->id = $_GET['id'];
        $this->pageNames = PageName::where('version_id', $this->id)->get();
        return response()->json($this->pageNames);
    }

   
}
