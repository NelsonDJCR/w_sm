<?php
use App\Style;
use Illuminate\Database\Seeder;

class StylesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $styles = '{
    "RECORDS": [
        {
            "name": "Natural",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Tradicional",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Romantico",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Elegante",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Creativo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Dramatico",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Seductor",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
         ]
         }';

    public function run()
    {
        $styles = json_decode($this->styles, true)['RECORDS'];
        foreach($styles AS $style) {
            Style::create([
                'name' => $style['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$style['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$style['updated_at'])
            ]);

        }
    }
}
