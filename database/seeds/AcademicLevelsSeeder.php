<?php
use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $academic_levels = '{
    "RECORDS": [
        {
            "name": "Primaria",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "name": "Bachillerato",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
          {
            "name": "Universitario Incompleto",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Profesional",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
         {
            "name": "Especialización",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Maestria",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Doctorado",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         },
          {
            "name": "Phd",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
         }
         ]
         }';

    public function run()
    {
        $academic_levels = json_decode($this->academic_levels, true)['RECORDS'];
        foreach($academic_levels AS $academic_level) {
            AcademicLevel::create([
                'name' => $academic_level['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$academic_level['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$academic_level['updated_at'])
            ]);

        }
    }
}
