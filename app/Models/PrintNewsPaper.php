<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintNewsPaper extends Model
{
    use HasFactory;
    private static $message;

    protected $fillable = [
        'title',
        'sub_title',
        'caption',
        'main_description',
        'version',
        'page',
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

    protected static $printNewsPaper;
    protected static $files;
    protected static $file;
    protected static $fileName;
    protected static $directory;

    public static function printNewsPaperSubmit($request)
    {
        $images = [];

        if (self::$files = $request->file('image')) {
            foreach (self::$files as self::$file) {
                self::$fileName = self::$file->getClientOriginalName();
                self::$directory =
                    './backend/assets/image/PrintNewsPaperImages/';
                self::$file->move(self::$directory, self::$fileName);
                $image[] = self::$directory . self::$fileName;
                // return  self::$fileName;
            }
        }

        self::$printNewsPaper = new PrintNewsPaper();
        self::$printNewsPaper->title = $request->title;
        self::$printNewsPaper->sub_title = $request->sub_title;
        self::$printNewsPaper->caption = $request->caption;
        self::$printNewsPaper->main_description = $request->main_description;
        self::$printNewsPaper->reporter = $request->reporter;
        self::$printNewsPaper->version = $request->version;
        self::$printNewsPaper->page = $request->page;
        self::$printNewsPaper->bkash_no = $request->bkash_no;
        self::$printNewsPaper->image = json_encode($image);
        self::$printNewsPaper->newspaper_name = json_encode(
            $request->newspaper_name
        );
        self::$printNewsPaper->divisions = $request->divisions;
        self::$printNewsPaper->districts = $request->districts;
        self::$printNewsPaper->police_station = $request->police_station;
        self::$printNewsPaper->newspaper_count = $request->newspaper_count;
        self::$printNewsPaper->newspaper_price = $request->newspaper_price;
        self::$printNewsPaper->newspaper_bkash_percentage =
            $request->newspaper_bkash_percentage;
        self::$printNewsPaper->content_price = $request->content_price;
        self::$printNewsPaper->content_price_word =
            $request->content_price_word;
        self::$printNewsPaper->bkash_transaction_id =
            $request->bkash_transaction_id;

        // self::$printNewsPaper->status                  = $request->status;
        self::$printNewsPaper->save();

        // $details = [
        //     'title' => 'Mail from info2limelight@gmail.com',

        // ];

        // \Mail::to($request->email)->send(new \App\Mail\ContactMail($details));
    }

    // public static function updatePrintNewsPaperStatus($id)
    // {
    //     self::$printNewsPaper = PrintNewsPaper::find($id);
    //     if (self::$printNewsPaper->status == 1) {
    //         self::$printNewsPaper->status = 0;
    //         self::$message =
    //             'printNewsPaper status info unpublished successfully';
    //     } else {
    //         self::$printNewsPaper->status = 1;
    //         self::$message =
    //             'printNewsPaper status info published successfully';
    //     }
    //     self::$printNewsPaper->save();
    //     return self::$message;
    // }

    public function instituteNames()
    {
        return $this->hasMany(InstituteName::class);
    }
}
