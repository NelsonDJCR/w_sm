<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['name', 'code', 'description', 'state', 'symbol'];

    protected static $currencyConverter;

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'code';
    }

    public static function laratablesCustomAction($currency)
    {
        try {
            return view('currencies.includes.action', ['currency' => $currency])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $currencies = Currency::orderBy('code')->get();
        $listCurrencies = [];
        foreach ($currencies as $currency) {
            $listCurrencies[$currency->id] = $currency->code . ' ' . $currency->name;
        }
        return $listCurrencies;
    }

    public static function getListCodes()
    {
        $currencies = Currency::orderBy('code')->get();
        $listCurrencies = [];
        foreach ($currencies as $currency) {
            $listCurrencies[$currency->code] = "({$currency->code}) - {$currency->name}";
        }
        return $listCurrencies;
    }

    /**
     * @return mixed
     */
    public static function getCurrencyConverter()
    {
        if (!isset(self::$currencyConverter)) {
            self::$currencyConverter = new \danielme85\CConverter\Currency();
        }

        return self::$currencyConverter;
    }

    public function getConvertString($cost)
    {
        $converter = self::getCurrencyConverter();
        try {
            return $converter->convert($this->code, session('currency'), $cost, 'money');
        } catch
        (\Exception $exception) {
            return 'No converter';
        } catch (\Error $error) {
            return 'No converter';
        }
    }
}
