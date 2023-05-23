<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineNewsPaper;
use App\Models\InstituteName;
use App\Models\Price;

// use App\Models\OnlineNewsPaperName;
// use App\Models\OnlineNewsPaperPrice;



class OnlineNewsPaperController extends Controller
{
    protected $onlineNewsPaperNames;
    protected $onlineNewsPaperPrices;

    
    public function index()

    
    {
        // $this->onlineNewsPaperNames = OnlineNewsPaperName::all();

        $this->instituteNames = InstituteName::Where('type_id','3')->get();

        // $this->onlineNewsPaperPrices = OnlineNewsPaperPrice::all();
        return view('frontend.online-news-paper.online-news-paper',
         [
        //     'onlineNewsPaperNames' => $this->onlineNewsPaperNames,
        //     'onlineNewsPaperPrices' => $this->onlineNewsPaperPrices,
        'instituteNames' => $this->instituteNames,


         ]
    );
    }

    public function onlineNewsPaperSubmit(Request $request)
    {   
        OnlineNewsPaper::onlineNewsPaperSubmit($request);
        return redirect()->back()->with('success', 'Content Submitted!');
    }


    public function getPriceByInstituteName()
    {
        $this->id = $_GET['id'];
        $this->prices = Price::where('institute_id', $this->id)->get();
        // $this->data = $this->prices->content_price;
        return response()->json($this->prices);
    }

   
}
