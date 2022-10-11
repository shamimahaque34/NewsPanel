<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineNewsPaper;


class OnlineNewsPaperController extends Controller
{
    protected $onlineNewsPapers;

    public function manageOnlineNewsPaper()
    {
        $this->onlineNewsPapers =  OnlineNewsPaper::orderBy('id', 'desc')->get();
        return view('backend.online-news-paper.manage-online-news-paper', ['onlineNewsPapers' => $this->onlineNewsPapers]);
    }


    public function updateStatus($id)
    {
        return redirect()->back()->with('message', OnlineNewsPaper::updateOnlineNewsPaperStatus($id));
    }

    public function delete($id)
    {  

      $this->onlineNewsPaper= OnlineNewsPaper::find($id);
    
       foreach(json_decode($this->onlineNewsPaper->image) as $file){
            unlink($file);
        }

        $this->onlineNewsPaper->delete();
        return redirect()->back()->with('success', 'Online News Paper info delete successfully');
    }

    public function download(Request $request, $file)
   
    {
        
        return response()->download(public_path($file));
    }


    // public function download(Request $request, $file)
    // {
    //     return response()->download(public_path($file));
    // }

}
