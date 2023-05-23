<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    private static $price;

    protected $fillable = [
        'type_id',
        'institute_id',
        'version_id',
        'page_id',
        'content_price',
        
    ];

    
    public static function priceSave( $request)
    {

      
        self::$price               = new Price();
        self::$price->type_id      = $request->type_id;
        self::$price->institute_id = $request->institute_id;
        self::$price->version_id   = $request->version_id;
        self::$price->page_id      = $request->page_id;
        self::$price->content_price        = $request->content_price;
        self::$price->save();

       
    }


    public static function updateData($request,$id)
    {   
        self::$price = Price::findOrFail($id);
        self::$price->type_id      = $request->type_id;
        self::$price->institute_id = $request->institute_id;
        self::$price->version_id   = $request->version_id;
        self::$price->page_id      = $request->page_id;
        self::$price->content_price        = $request->content_price;
        self::$price->save();
       
        
    }


    public function instituteType()
    {
        return $this->belongsTo(InstituteType::class, 'type_id');
    }

    public function instituteName()
    {
        return $this->belongsTo(InstituteName::class, 'institute_id');
    }

    public function versionName()
    {
        return $this->belongsTo(VersionName::class, 'version_id');
    }

    public function pageName()
    {
        return $this->belongsTo(PageName::class, 'page_id');
    }
}
