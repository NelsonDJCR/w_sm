<?php
use App\ModelLevel;
use Illuminate\Database\Seeder;

class ModelLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $model_levels = '{
    "RECORDS": [
        {
            "name": "Gold",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Platinum",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Bronze",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
        ,
        {
            "name": "VIP",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }

         ]
         }';

    public function run()
    {
        $model_levels = json_decode($this->model_levels, true)['RECORDS'];
        foreach($model_levels AS $model_level) {
            ModelLevel::create([
                'name' => $model_level['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$model_level['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$model_level['updated_at'])
            ]);

        }
    }

}
