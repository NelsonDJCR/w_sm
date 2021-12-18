<?php

use App\Accessory;
use Illuminate\Database\Seeder;

class AccessoriesTableSeeder extends Seeder
{


    private $accessories = '{
    "RECORDS": [
               {
            "id": "1",
            "name": "Super potenciador natural",
            "type": "1",
            "description": "El mejor potenciador sexual, potencia y duración",
            "tags": "Accesorios"
        },
        {
            "id": "2",
            "name": "Anillos silicona",
            "type": "2",
            "description": "Con estos anillos tu pene estará más duro más grande y te permitirá combatir la eyaculación precoz",
            "tags": "Performance, Accesorios"
        },
        {
            "id": "3",
            "name": "Megasex pastillas",
            "type": "2",
            "description": "La mejor y más rápida forma de tener una erección perfecta aumenta el largo y el grosor",
            "tags": "Accesorios"
        },
        {
            "id": "4",
            "name": "Disfraz",
            "type": "3",
            "description": "Uso de disfraz designado por el cliente",
            "tags": "Disfraz, Accesorios"
        },
        {
            "id": "5",
            "name": "Anillo vibrador",
            "type": "3",
            "description": "La poderosa bala proporciona vibraciones increíbles",
            "tags": "Accesorios"
        },
        {
            "id": "6",
            "name": "Maquillaje",
            "type": "3",
            "description": "Uso de maquillaje especial solicitado por el cliente",
            "tags": "Accesorios"
        },
        {
            "id": "7",
            "name": "Anillo lengua vibradora",
            "type": "3",
            "description": "Anillo lengua vibradora Tongue Vib",
            "tags": "Accesorios"
        },
        {
            "id": "8",
            "name": "Consolador",
            "type": "3",
            "description": "Consolador de Jelly supersuave venoso firme y flexible",
            "tags": "Accesorios"
        },
        {
            "id": "9",
            "name": "Bolas anales",
            "type": "3",
            "description": "Bolas Chinas  Anales viene en diferentes colores",
            "tags": "Accesorios"
        },
        {

            "id": "10",
            "name": "Lubricante caliente",
            "type": "3",
            "description": "El Lubricante Caliente calienta suavemente al contacto y con un poco de movimiento",
            "tags": "Accesorios"
        },
        {
            "id": "11",
            "name": "Estimulante femenino",
            "type": "3",
            "description": "Poderosa crema tópica que amplifica el placer sexual inmediatamente después del contacto",
            "tags": "Accesorios"
        },
        {
            "id": "12",
            "name": "Polvo para sexo oral",
            "type": "3",
            "description": "El único polvo para sexo oral del mundo que es efervescente, estalla y explota",
            "tags": "Accesorios"
        },
        {
            "id": "13",
            "name": "Azotador con plumas",
            "type": "3",
            "description": "Sofisticado azotador o fusta que tiene unas elegantes plumas en una punta y un placentero azotador en la otra",
            "tags": "Accesorios, Experiencia"
        },
        {
            "id": "14",
            "name": "Esposas metalizadas",
            "type": "3",
            "description": "Estas elegantes Esposas Metalizadas para las Muñecas son totalmente ajustables",
            "tags": "Accesorios"
        },
        {
            "id": "15",
            "name": "Succionador de pezones",
            "type": "3",
            "description": "La succión y el aumento del flujo sanguíneo a los pezones aumentan la sensibilidad y el placer",
            "tags": "Accesorios"
        },
        {
            "id": "16",
            "name": "Alargador transparente de pezones",
            "type": "3",
            "description": "La succión y el aumento del flujo sanguíneo en los pezones aumentan la sensibilidad y mejorar la circulación",
            "tags": "Accesorios"
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
        $accessories = json_decode($this->accessories, true)['RECORDS'];

        Accessory::unguard(); //Allows to define the id
        foreach ($accessories as $accessory) {
            Accessory::create([
                'id' => $accessory['id'],
                'name' => $accessory['name'],
                'type' => $accessory['type'],
                'description' => $accessory['description'],
                'tags' => $accessory['tags'],
            ]);
        }
    }
}
