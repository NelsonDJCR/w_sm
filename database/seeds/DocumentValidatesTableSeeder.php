<?php

use App\DocumentValidate;
use Illuminate\Database\Seeder;

class DocumentValidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $document_validates = '{
    "RECORDS": [
        {
            "name": "Foto",
            "description": "Su foto selfie es confidencial, no será pública, ni compartida a terceros, por políticas de seguridad se solicita. ",
            "person_type": "Natural"
        },
        {
            "name": "Foto",
            "description": "Sube una foto",
            "person_type": "Juridical"
        }
    ]
    }';

    public function run()
    {
        $documents = json_decode($this->document_validates, true)['RECORDS'];

        DocumentValidate::unguard(); //Allows to define the id

        foreach($documents as $document) {
            DocumentValidate::create([
                'name' => $document['name'],
                'description' => $document['description'],
                'person_type' => $document['person_type']
            ]);
        }
    }
}
