<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineNewsPaper extends Model
{
    use HasFactory;

    private static $message;

    protected $fillable = [
        'title',
        'sub_title',
        'caption',
        'main_description',
        'reporter',
        'bkash_no',
        'image',
        'newspaper_name',
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


    protected static $onlineNewsPaper;
    protected  static $files;
    protected  static $file;
    protected  static $fileName;
    protected  static $directory;

    
     public static function onlineNewsPaperSubmit( $request)
    {

        $images  =[];

        if(self::$files = $request->file('image'))
        {  foreach(self::$files as self::$file)
            {
                self::$fileName = self::$file->getClientOriginalName();
                self::$directory = './backend/assets/image/PrintNewsPaperImages/';
                self::$file->move(self::$directory, self::$fileName);
                $image[] = self::$directory.self::$fileName;
                // return  self::$fileName; 
            }
           
        }

        self::$onlineNewsPaper                             = new OnlineNewsPaper();
        self::$onlineNewsPaper->title                      = $request->title;
        self::$onlineNewsPaper->sub_title                  = $request->sub_title;
        self::$onlineNewsPaper->caption                    = $request->caption;
        self::$onlineNewsPaper->main_description           = $request->main_description;
        self::$onlineNewsPaper->reporter                   = $request->reporter;
        self::$onlineNewsPaper->bkash_no                   = $request->bkash_no;
        self::$onlineNewsPaper->image                      = json_encode($image);
        self::$onlineNewsPaper->newspaper_name             = json_encode($request->newspaper_name);
        self::$onlineNewsPaper->divisions                  = $request->divisions ;
        self::$onlineNewsPaper->districts                  = $request->districts;
        self::$onlineNewsPaper->police_station             = $request->police_station ;
        self::$onlineNewsPaper->newspaper_count            = $request->newspaper_count;
        self::$onlineNewsPaper->newspaper_price            = $request->newspaper_price;
        self::$onlineNewsPaper->newspaper_bkash_percentage = $request->newspaper_bkash_percentage;
        self::$onlineNewsPaper->content_price              = $request->content_price;
        self::$onlineNewsPaper->content_price_word         = $request->content_price_word;
        // self::$printNewsPaper->status             = $request->status;
        self::$onlineNewsPaper->save();

        // $details = [
        //     'title' => 'Mail from info2limelight@gmail.com',
            
        // ];
       
        // \Mail::to($request->email)->send(new \App\Mail\ContactMail($details));
    }


    public static function updateOnlineNewsPaperStatus($id)
    {
        self::$onlineNewsPaper= OnlineNewsPaper::find($id);
        if(self::$onlineNewsPaper->status == 1)
        {
            self::$onlineNewsPaper->status = 0;
            self::$message = 'printNewsPaper status info unpublished successfully';
        }
        else
        {
            self::$onlineNewsPaper->status = 1;
            self::$message = 'printNewsPaper status info published successfully';
        }
        self::$onlineNewsPaper->save();
        return self::$message;
    }

   
}
