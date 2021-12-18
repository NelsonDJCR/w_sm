<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientUser = [
            'name' => 'Juan Jiménez',
            'customer_type' => 'Juridical',
            'nick_name' => 'JJ',
            'email' => 'client@mail.com',
            'email_verified_at' => now(),
            'country_code' => '3',
            'phone' => '3134235897',
            'state' => '1',
            'password' => bcrypt('1234567890'),
            'language' => 'Español, Inglés'
        ];

        Illuminate\Database\Eloquent\Model::reguard();

        \App\Customer::createFromParams($clientUser);
    }
}
