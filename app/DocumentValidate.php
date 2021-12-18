<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentValidate extends Model
{
    protected $fillable = ['name', 'description', 'person_type'];

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($documentValidate)
    {
        try {
            return view('document_validates.includes.action', ['documentValidate' => $documentValidate])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $documentValidates = self::orderBy('name')->get();
        $listDocumentValidates = [];
        foreach ($documentValidates as $documentValidate) {
            $listDocumentValidates[$documentValidate->id] = $documentValidate->name;
        }
        return $listDocumentValidates;
    }

    public function Offerors() {
        return $this->belongsToMany('App\DocumentValidate');
    }

    public function validations(){
        return $this->hasMany('App\Validation');
    }
}
