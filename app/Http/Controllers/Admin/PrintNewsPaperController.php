<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrintNewsPaper;


class PrintNewsPaperController extends Controller
{
    protected $printNewsPapers;
    private static $printNewsPaper;

    public function managePrintNewsPaper()
    {
        $this->printNewsPapers =  PrintNewsPaper::orderBy('id', 'desc')->get();
        return view('backend.print-news-paper.manage-print-news-paper', ['printNewsPapers' => $this->printNewsPapers]);
    }


    // public function updateStatus($id)
    // {
    //     return redirect()->back()->with('message', PrintNewsPaper::updatePrintNewsPaperStatus($id));
    // }

    public static function updateStatus($id)
    {
        self::$printNewsPaper = PrintNewsPaper::find($id);
        if (self::$printNewsPaper->status == 0)
        {
            self::$printNewsPaper->status = 1;
        }
        else
        {
            self::$printNewsPaper->status = 0;
            
        }
        self::$printNewsPaper->save();
        return redirect()->back()->with('success', 'Print News Paper  info status update successfully');

        
    }
    public function delete($id)
    {  

      $this->printNewsPaper= PrintNewsPaper::find($id);
    
       foreach(json_decode($this->printNewsPaper->image) as $file){
            unlink($file);
        }

        $this->printNewsPaper->delete();
        return redirect()->back()->with('success', 'Print News Paper info delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        PrintNewsPaper::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Print News Paper deleted successfully."]);
         
    }

    public function download(Request $request, $file)
   
    {
        
        return response()->download(public_path($file));
    }


    // public function getInstituteNameByInstituteType()
    // {
    //     $this->id = $_GET['id'];
    //     $this->instituteNames = InstituteName::where('type_id', $this->id)->get();
    //     return response()->json($this->instituteNames);
    // }


    // public function download(Request $request, $file)
    // {
    //     return response()->download(public_path($file));
    // }

}
