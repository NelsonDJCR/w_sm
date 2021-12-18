<?php
use App\Contexture;
use Illuminate\Database\Seeder;
class ContexturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $contextures = '{
    "RECORDS": [
        {
            "name": "Delgado",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Atlético",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Robusto",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Musculoso",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
    ]
    }';

    public function run()
    {
        $contextures = json_decode($this->contextures, true)['RECORDS'];
        foreach($contextures AS $contexture) {
            Contexture::create([
                'name' => $contexture['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$contexture['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$contexture['updated_at'])
            ]);

        }
    }
}
