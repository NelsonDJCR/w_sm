<?php
use App\Bank;
use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $banks = '{
    "RECORDS": [
        {
            "name": "Banco de Bogotá",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {

            "name": "Banco Popular",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {

            "name": "ITAÚ",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"

         },
          {
            "name": "Bancolombia",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Citibank",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
           },
           {
            "name": "BANCO GNB SUDAMERIS",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "BBVA",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
            },
           {
            "name": "Banco  de Occidente",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Banco Caja Social",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Davivienda",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "COLPATRIA",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Banco Agrario de Colombia",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "AV Villas",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "ProCredit",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Bancamía",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Banco W",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Banco Coomeva",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Banco Finandina",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Banco Falabella",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Banco Pichincha",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Banco Santander",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Banco Mundo Mujer",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "MULTIBANK",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "BANCOMPARTIR",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Ahorro a la Mano",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Nequi",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Daviplata",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "DaviPay",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "AvalPay",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Tpaga",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Movii",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Rappipay",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "GoPass",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Dale",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "BBVA Wallet",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "Billetera Colpatria",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "SERFINANZA",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          }
         ]
         }';

    public function run()
    {

        $banks = json_decode($this->banks, true)['RECORDS'];

        foreach ($banks as $bank) {
            Bank::create([
                'name' => $bank['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$bank['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$bank['updated_at'])
            ]);
        }

    }
}
