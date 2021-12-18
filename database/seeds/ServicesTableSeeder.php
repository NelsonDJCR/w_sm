<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    private $services = '{
    "RECORDS": [
        {
            "id": "1",
            "name": "Servicio básico con protección",
            "type": "1",
            "description": "Relación sexual con penetración vaginal y varias posiciones, utilizando preservativo",
            "tags": "Vaginal, Posiciones, Preservativo"
        },
        {
            "id": "2",
            "name": "Baile erótico",
            "type": "2",
            "description": "Baile sensual que se realiza con el fin de provocar excitación y propiciar placer sexual",
            "tags": "Baile, Erótico, Sensual"
        },
        {
            "id": "3",
            "name": "Masaje erótico",
            "type": "3",
            "description": "Masaje sensual que se realiza con el fin de provocar excitación y propiciar placer sexual",
            "tags": "Masaje, Erótico, Sensual"
        },
        {
            "id": "4",
            "name": "Trio",
            "type": "4",
            "description": "Dos mujeres mantienen relaciones sexuales de manera simultánea con la persona que solicita el servicio",
            "tags": "Trio, Fetiche"
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
        $services = json_decode($this->services, true)['RECORDS'];

        Service::unguard(); //Allows to define the id
        foreach ($services as $service) {
            Service::create([
                'id' => $service['id'],
                'name' => $service['name'],
                'type' => $service['type'],
                'description' => $service['description'],
                'tags' => $service['tags'],
            ]);
        }
    }
}
