<?php
use App\Ethnicity;
use Illuminate\Database\Seeder;

class EthnicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $ethnicities = '{
    "RECORDS": [
        {
            "name": "Albino",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "Criollo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "Criollo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Mestizos",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Caucásicos",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Mulato",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "Morisco",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Chino",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "Saltapatrás",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "Saltapatrás",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "Albarazado",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
           {
            "name": "Cambujo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Indígena",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
          },
           {
            "name": "Zambiaga",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Calpamulato",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $ethnicities = json_decode($this->ethnicities, true)['RECORDS'];


        foreach($ethnicities AS $ethnicity) {
            Ethnicity::create([
                'name' => $ethnicity['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$ethnicity['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$ethnicity['updated_at'])
            ]);

        }


    }



}
