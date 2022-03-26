<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ACLDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Permission::truncate();
        Role::truncate();

        $role = Role::create(['name' => 'super_admin']);

        $permissions = [
            ['name' => 'view theme'],
            ['name' => 'create users'],
            ['name' => 'read users'],
            ['name' => 'update users'],
            ['name' => 'delete users']
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $role->syncPermissions($permissions);

        User::whereEmail('admin@mail.com')->first()->assignRole($role);
    }
}
