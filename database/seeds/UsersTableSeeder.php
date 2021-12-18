<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'id' => '1',
            'name' => 'Administrador del sistema',
            'nick_name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'country_code' => '1',
            'phone' => '3002584789',
            'state' => '1',
            'password' => bcrypt('1234567890'),
            'language' => 'es',
            'preferred_currency' => 'COP'
        ]);
    


        // Asignación del rol
        $adminRole = Role::create(['name' => 'Administrator']);
        $clientRole = Role::create(['name' => 'Client']);
        $modelRole = Role::create(['name' => 'Model']);

        Permission::create(['name' => 'manage_users']);
        Permission::create(['name' => 'manage_publications']);
        Permission::create(['name' => 'manage_basic_tables']);

        $adminRole->givePermissionTo('manage_users');
        $adminRole->givePermissionTo('manage_publications');
        $adminRole->givePermissionTo('manage_basic_tables');

        $adminUser->assignRole('Administrator');


    }
}
