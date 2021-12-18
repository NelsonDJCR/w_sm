<?php

use App\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesTableSeeder extends Seeder
{
    private $currencies = '
    {
    "RECORDS": [
        {
            "name": "Pesos",
            "code": "COP",
            "symbol": "$",
            "state": "1"
        }
    ]
}';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = json_decode($this->currencies, true)['RECORDS'];

        foreach ($currencies as $currency) {
            Currency::create([
                'name' => $currency['name'],
                'code' => $currency['code'],
                'state' => $currency['state'],
                'symbol' => $currency['symbol'],
            ]);
        }
    }
}
