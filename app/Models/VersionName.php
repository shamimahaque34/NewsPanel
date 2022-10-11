<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersionName extends Model
{
    use HasFactory;

    private static $versionName;

    protected $fillable = [
        'type_id',
        'institute_id',
        'version_name',
        
    ];

    
    public static function versionNameSave( $request)
    {

      
        self::$versionName                 = new VersionName();
        self::$versionName->type_id        = $request->type_id;
        self::$versionName->institute_id = $request->institute_id;
        self::$versionName->version_name = $request->version_name;
        self::$versionName->save();

       
    }

    public static function updateData($request,$id)
    {   
        self::$versionName               = VersionName::findOrFail($id);
        self::$versionName->type_id      = $request->type_id;
        self::$versionName->institute_id = $request->institute_id;
        self::$versionName->version_name = $request->version_name;
        self::$versionName->save();

        
    }

    public function instituteType()
    {
        return $this->belongsTo(InstituteType::class);
    }

    public function instituteName()
    {
        return $this->belongsTo(InstituteName::class);
    }
}
