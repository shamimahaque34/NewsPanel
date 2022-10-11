<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteType extends Model
{
    use HasFactory;

    private static $instituteTypeName;

    protected $fillable = [
        'type_name',
        
    ];

    
    public static function instituteTypeNameSave( $request)
    {

      
        self::$instituteTypeName                     = new InstituteType();
        self::$instituteTypeName->type_name          = $request->type_name;
        self::$instituteTypeName->save();

       
    }

    public static function updateData($request,$id)
    {   
        self::$instituteTypeName = InstituteType::findOrFail($id);
        self::$instituteTypeName->type_name          = $request->type_name;
        self::$instituteTypeName->save();

        
    }


}
