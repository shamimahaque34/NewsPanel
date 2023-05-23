<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tv;


class TvController extends Controller
{
    protected $tvs;
    public static $tv;

    public function manageTv()
    {
        $this->tvs =  Tv::orderBy('id', 'desc')->get();
        return view('backend.tv.manage-tv', ['tvs' => $this->tvs]);
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Tv::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Tv deleted successfully."]);
         
    }

    public static function updateStatus($id)
    {
        self::$tv = Tv::find($id);
        if (self::$tv->status == 0)
        {
            self::$tv->status = 1;
        }
        else
        {
            self::$tv->status = 0;
            
        }
        self::$tv->save();
        return redirect()->back()->with('success', 'Tv info status update successfully');

        
    }


    public function delete($id)
    {
       
        $this->tv= Tv::find($id);
    
        $this->tv->delete();
        return redirect()->back()->with('success', 'Tv info delete successfully');
    }
}
