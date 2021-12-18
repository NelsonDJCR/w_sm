<?php

use App\TimeUnit;
use Illuminate\Database\Seeder;

class TimeUnitTableSeeder extends Seeder
{
    private $time_units = '{
    "RECORDS": [
        {
            "id": "4",
            "name": "Rato",
            "hour": 0.5,
            "state": 1
        },
        {
            "id": "1",
            "name": "Hora",
            "hour": 1,
            "state": 1
        },
        {
            "id": "2",
            "name": "Día",
            "hour": 8,
            "state": 1
        },
        {
            "id": "3",
            "name": "Semana",
            "hour": 40,
            "state": 1

        }

    ]
}';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times = json_decode($this->time_units, true)['RECORDS'];

        TimeUnit::unguard(); //Allows to define the id


        foreach ($times as $time) {
            TimeUnit::create([
                'id' => $time['id'],
                'name' => $time['name'],
                'hour' => $time['hour'],
                'state' => $time['state']
            ]);
        }
    }
}
