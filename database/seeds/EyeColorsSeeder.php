<?php
use App\EyeColor;
use Illuminate\Database\Seeder;

class EyeColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $eye_colors = '{
    "RECORDS": [
        {
            "name": "Café",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Verdes",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Azules",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Grises",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Negros",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Miel",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Rojos",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
    ]
    }';

    public function run()
    {
        $eye_colors = json_decode($this->eye_colors, true)['RECORDS'];
        foreach($eye_colors AS $eye_color) {
            EyeColor::create([
                'name' => $eye_color['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$eye_color['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$eye_color['updated_at'])
            ]);

        }
    }
}
