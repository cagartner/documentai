<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mester = Role::updateOrCreate([
            'name' => 'Master',
            'slug' => 'master',
            'permissions' => [
                'all' => true,
            ]
        ]);

        $client = Role::updateOrCreate([
            'name' => 'Client',
            'slug' => 'client',
            'permissions' => [
                'read-document' => true
            ]
        ]);
    }
}
