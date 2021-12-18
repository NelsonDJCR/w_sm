<?php
use App\PantsSize;
use Illuminate\Database\Seeder;

class PantsSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $pants_sizes = '{
    "RECORDS": [

       {
            "name": "00",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "name": "0",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "2",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "4",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
             {
            "name": "6",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "8",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "10",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "12",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "14",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "16",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "18",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "20",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "22",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "name": "24",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "name": "26",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "28",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "30",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "32",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "34",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "36",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "38",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "40",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
          {
            "name": "42",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          }
         ]
         }';

    public function run()
    {
        $pants_sizes = json_decode($this->pants_sizes, true)['RECORDS'];
        foreach($pants_sizes AS $pants_size) {
            PantsSize::create([
                'name' => $pants_size['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$pants_size['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$pants_size['updated_at'])
            ]);

        }
    }
}
