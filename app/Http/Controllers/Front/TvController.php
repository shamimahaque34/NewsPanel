<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tv;
use App\Models\InstituteName;
use App\Models\Price;

// use App\Models\TvName;
// use App\Models\TvPrice;



class TvController extends Controller
{
    protected $tvNames;
    protected $tvPrices;

    
    public function index()

    
    {
        $this->instituteNames = InstituteName::Where('type_id','1')->get();

        // $this->tvPrices = TvPrice::all();
        $this->prices        = Price::all();
        return view('frontend.tv.tv',
        [
            // 'tvNames' => $this->tvNames,
            //'tvPrices' => $this->tvPrices,
            
                'instituteNames' => $this->instituteNames,
                'prices' => $this->prices ,
    
             

        ]
    );
    }

    public function tvSubmit(Request $request)
    {   
        Tv::tvSubmit($request);
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
