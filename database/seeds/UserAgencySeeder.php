<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;






class UserAgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $agencyUser = DB::table('users')->insert([
            'id' => '3',
            'name' => 'Agency',
            'nick_name' => 'Agency',
            'email' => 'agency@mail.com',
            'email_verified_at' => now(),
            'country_code' => '1',
            'phone' => '3002584789',
            'state' => '1',
            'password' => bcrypt('1234567890'),
            'language' => 'es',
            'preferred_currency' => 'COP'
        ]);
        $agencyUserII = DB::table('users')->insert([
            'id' => '4',
            'name' => 'Agency',
            'nick_name' => 'AgencyII',
            'email' => 'agency2@mail.com',
            'email_verified_at' => now(),
            'country_code' => '1',
            'phone' => '3002584789',
            'state' => '1',
            'password' => bcrypt('1234567890'),
            'language' => 'es',
            'preferred_currency' => 'COP'
        ]);




        $roleAgency = Role::create(['name' => 'Agencia']);






        Permission::create(['name' => 'offerors.index']);
        Permission::create(['name' => 'offerors.create']);
        Permission::create(['name' => 'offerors.edit']);
        /*******************asignamos permisos*********/

        $roleAgency->givePermissionTo('offerors.index');
        $roleAgency->givePermissionTo('offerors.create');
        $roleAgency->givePermissionTo('offerors.edit');

        $agencyUser = User::find(3);
        $agencyUser->update([]);
        $agencyUser->assignRole('Agencia');
        $agencyUserII = User::find(4);
        $agencyUserII->update([]);
        $agencyUserII->assignRole('Agencia');













        // $roleAgency = Role::create(['name' => 'Agencia']);
        // Permission::create(['name'=>'offerors.index']);

        // // Permission::create(['name' => 'manage_publications']);
        // // Permission::create(['name' => 'manage_basic_tables']);


        // // Asignación del rol
        // // $agencyUser->assignRole('Agencia');


        // $agencyUser = User::find(3);
        // $agencyUser->update([]);
        // $agencyUser->givePermissionTo('user.index');
        // $agencyUser->assignRole('Agencia');




    }
}
