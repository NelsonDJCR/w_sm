<?php

namespace App\Http\Controllers\API;

use App\AcademicLevel;
use App\Accessory;
use App\Aptitude;
use App\Bank;
use App\BraSize;
use App\City;
use App\Contexture;
use App\Country;
use App\Currency;
use App\Ethnicity;
use App\EyeColor;
use App\FinancialInformation;
use App\HairColor;
use App\HairLength;
use App\Hobby;
use App\Language;
use App\ModelLevel;
use App\PantsSize;
use App\Profession;
use App\Service;
use App\ShirtSize;
use App\ShoesSize;
use App\SkinColor;
use App\Style;
use App\Http\Controllers\Controller;
use App\TimeUnit;

class ListController extends Controller
{
    public function getOfferorProfileList()
    {
        $list=[
            'Country'=>Country::getList(),
            'City'=>City::getList(),
            'Ethnicity'=>Ethnicity::getList(),
            'SkinColor'=>SkinColor::getList(),
            'EyeColor'=>EyeColor::getList(),
            'HairColor'=>HairColor::getList(),
            'HairLength'=>HairLength::getList(),
            'Contexture'=>Contexture::getList(),
            'Style'=>Style::getList(),
            'ShoesSize'=>ShoesSize::getList(),
            'ShirtSize'=>ShirtSize::getList(),
            'BraSize'=>BraSize::getList(),
            'PantsSize'=>PantsSize::getList(),
            'Profession'=>Profession::getList(),
            'Language'=>Language::getList(),
            'Aptitude'=>Aptitude::getList(),
            'Hobby'=>Hobby::getList(),
            'ModelLevel'=>ModelLevel::getList(),
            'AcademicLevel'=>AcademicLevel::getList()
        ];

        return $list;
    }

    public function getOfferorServiceList()
    {
        $list=[
            'Service'=>Service::getList(),
            'TimeUnit'=>TimeUnit::getList(),
            'Currency'=>Currency::getList(),
        ];

        return $list;
    }

    public function getOfferorAccessoryList()
    {
        $list=[
            'Accesory'=>Accessory::getList(),
            'Currency'=>Currency::getList(),
        ];

        return $list;
    }
    public function getOfferorFinancialInformationList()
    {
        $list=[
            'Bank'=>Bank::getList(),
            'TypeAccount'=> ['Ahorros' => 'Ahorros', 'Corriente' => 'Corriente', 'Nomina' => 'Nomina'],
        ];

        return $list;
    }
    public function getOfferorMonetaryRequestList()
    {
        $list=[
            'FinancialInformation'=>FinancialInformation::getList(),
        ];

        return $list;
    }



    //Returns the option list of an specified item model.
    //NOTE: cities return all the array, should be dependant of the country
    public function getItemList($item)
    {
        switch ($item) {
            case 'countries':
                return Country::orderBy('name')->get(['id','name']);
            case 'cities':
                return City::orderBy('name')->get(['id','name']);
            default:
                return [];
        }

    }
}
