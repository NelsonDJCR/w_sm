<?php
use App\BraSize;
use Illuminate\Database\Seeder;

class BraSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $bra_sizes = '{
    "RECORDS": [
        {
            "name": "30A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "30B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "32A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "32B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "32C",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "34A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "34B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "34C",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "36A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "36B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "36C",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
           {
            "name": "36D",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "38A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "38B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
           {
            "name": "38C",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "38D",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "40A",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "40B",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "40C",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "40D",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $bra_sizes = json_decode($this->bra_sizes, true)['RECORDS'];
        foreach($bra_sizes AS $bra_size) {
            BraSize::create([
                'name' => $bra_size['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$bra_size['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$bra_size['updated_at'])
            ]);

        }
    }
}
