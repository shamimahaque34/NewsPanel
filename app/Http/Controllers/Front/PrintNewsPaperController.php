<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrintNewsPaper;
use App\Models\InstituteName;
use App\Models\VersionName;
use App\Models\PageName;
use App\Models\Price;






class PrintNewsPaperController extends Controller
{
    protected $printNewsPaperNames;
    protected $printNewsPaperPrices;

    
    public function index()

    
    {
         $this->instituteNames = InstituteName::Where('type_id','2')->get();
         $this->versionNames  = VersionName::all();
         $this->pageNames     = PageName::all();
         $this->prices        = Price::all();


        return view('frontend.print-news-paper.print-news-paper',
        [
            'instituteNames' => $this->instituteNames,
            'versionNames'   => $this->versionNames,
            'pageNames'      => $this->pageNames ,
            'prices'         =>$this->prices, 
       

         ]
    );
    }

    public function printNewsPaperSubmit(Request $request)
    {   
        PrintNewsPaper::printNewsPaperSubmit($request);
        return redirect()->back()->with('success', 'Content Submitted!');
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

    public function getPriceByPageName()
    {
        $this->id = $_GET['id'];
        $this->prices = Price::where('page_id', $this->id)->get();
        // $this->data = $this->prices->content_price;
        return response()->json($this->prices);
    }

    

    

   
}
