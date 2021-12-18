<?php
use App\ShirtSize;
use Illuminate\Database\Seeder;

class ShirtSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $shirt_sizes = '{
    "RECORDS": [
        {
            "name": "XS",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "S",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "M",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "L",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "XL",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "XXL",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "3XL",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "4XL",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $shirt_sizes = json_decode($this->shirt_sizes, true)['RECORDS'];
        foreach($shirt_sizes AS $shirt_size) {
            ShirtSize::create([
                'name' => $shirt_size['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$shirt_size['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$shirt_size['updated_at'])
            ]);

        }
    }
}
