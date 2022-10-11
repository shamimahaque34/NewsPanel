<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'file_name',
        'video_google_drive_link',
        'reporter',
        'bkash_no',
        'tv_name',
        'divisions',
        'districts',
        'police_station',
        'newspaper_count',
        'newspaper_price',
        'newspaper_bkash_percentage',
        'content_price',
        'bkash_transaction_id',
        'content_price_word',
        'status',
        
    ];


    protected static $Tv;

    public static function tvSubmit($request)
    {
        self:: $Tv                             = new Tv();
        self:: $Tv->title                      = $request->title;
        self:: $Tv->file_name                  = $request->file_name;
        self:: $Tv->video_google_drive_link    = $request->video_google_drive_link;
        self:: $Tv->reporter                   = $request->reporter;
        self:: $Tv->bkash_no                   = $request->bkash_no;
        self:: $Tv->tv_name                    = json_encode($request->tv_name);
        self:: $Tv->divisions                  = $request->divisions;
        self:: $Tv->districts                  = $request->districts;
        self:: $Tv->police_station             = $request->police_station;
        self:: $Tv->newspaper_count            = $request->newspaper_count;
        self:: $Tv->newspaper_price            = $request->newspaper_price;
        self:: $Tv->newspaper_bkash_percentage = $request->newspaper_bkash_percentage ;
        self:: $Tv->content_price              = $request->content_price;
        self:: $Tv->content_price_word         = $request->content_price_word;
        // self:: $Tv->status                  = $request->status;
        self:: $Tv->save();

        // $details = [
        //     'title' => 'Mail from info2limelight@gmail.com',
            
        // ];
       
        // \Mail::to($request->email)->send(new \App\Mail\ContactMail($details));
    }
}
