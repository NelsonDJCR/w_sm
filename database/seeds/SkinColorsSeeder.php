<?php
use App\SkinColor;
use Illuminate\Database\Seeder;

class SkinColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $skin_colors = '{
    "RECORDS": [
         {
            "name": "Piel muy clara o blanca",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Piel clara",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Piel clara intermedia",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Morena",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Trigueña",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
         {
            "name": "Piel muy oscura o negra",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $skin_colors = json_decode($this->skin_colors, true)['RECORDS'];
        foreach($skin_colors AS $skin_color) {
            SkinColor::create([
                'name' => $skin_color['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$skin_color['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$skin_color['updated_at'])
            ]);

        }
    }
}
