<?php
use App\HairLength;
use Illuminate\Database\Seeder;

class HairLengthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $hair_lengths = '{
    "RECORDS": [
        {
            "name": "Corto",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Medio",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Largo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Muy largo",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Sin cabello",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
    ]
    }';

    public function run()
    {
        $hair_lengths = json_decode($this->hair_lengths, true)['RECORDS'];
        foreach($hair_lengths AS $hair_length) {
            HairLength::create([
                'name' => $hair_length['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hair_length['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hair_length['updated_at'])
            ]);

        }
    }
}
