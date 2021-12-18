<?php
use App\HairColor;
use Illuminate\Database\Seeder;

class HairColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $hair_colors = '{
    "RECORDS": [
        {
            "name": "Negro",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Castaño",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "Rubio",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Rojo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "Cafe",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Blanco",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Verde",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Rosa",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Violeta",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Amarillo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $hair_colors = json_decode($this->hair_colors, true)['RECORDS'];
        foreach($hair_colors AS $hair_color) {
            HairColor::create([
                'name' => $hair_color['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hair_color['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hair_color['updated_at'])
            ]);

        }
    }
}
