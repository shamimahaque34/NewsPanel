<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteName extends Model
{
    use HasFactory;

    private static $instituteName;

    protected $fillable = ['type_id', 'institute_name'];

    public static function instituteNameSave($request)
    {
        self::$instituteName = new InstituteName();
        self::$instituteName->type_id = $request->type_id;
        self::$instituteName->institute_name = $request->institute_name;
        self::$instituteName->save();
    }

    public static function updateData($request, $id)
    {
        self::$instituteName = InstituteName::findOrFail($id);
        self::$instituteName->type_id = $request->type_id;
        self::$instituteName->institute_name = $request->institute_name;
        self::$instituteName->save();
    }

    public function instituteType()
    {
        return $this->belongsTo(InstituteType::class, 'type_id');
    }
}
