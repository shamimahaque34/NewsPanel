<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageName extends Model
{
    use HasFactory;

    private static $pageName;

    protected $fillable = [
        'type_id',
        'institute_id',
        'version_id',
        'page_name'
        
    ];

    
    public static function pageNameSave( $request)
    {

      
        self::$pageName               = new PageName();
        self::$pageName->type_id      = $request->type_id;
        self::$pageName->institute_id = $request->institute_id;
        self::$pageName->version_id   = $request->version_id;
        self::$pageName->page_name    = $request->page_name;
        self::$pageName->save();

       
    }

    public static function updateData($request,$id)
    {   
        self::$pageName = PageName::findOrFail($id);
        self::$pageName->type_id      = $request->type_id;
        self::$pageName->institute_id = $request->institute_id;
        self::$pageName->version_id   = $request->version_id;
        self::$pageName->page_name    = $request->page_name;
        self::$pageName->save();
        
    }

    public function instituteType()
    {
        return $this->belongsTo(InstituteType::class);
    }

    public function instituteName()
    {
        return $this->belongsTo(InstituteName::class);
    }

    public function versionName()
    {
        return $this->belongsTo(VersionName::class);
    }
}
