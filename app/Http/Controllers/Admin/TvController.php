<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tv;


class TvController extends Controller
{
    protected $tvs;

    public function manageTv()
    {
        $this->tvs =  Tv::orderBy('id', 'desc')->get();
        return view('backend.tv.manage-tv', ['tvs' => $this->tvs]);
    }

    public function delete($id)
    {
       
        $this->tv= Tv::find($id);
    
        $this->tv->delete();
        return redirect()->back()->with('success', 'Tv info delete successfully');
    }
}
