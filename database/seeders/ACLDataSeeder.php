<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Permission;
use Spatie\Permission\Models\Role;

class ACLDataSeeder extends Seeder
{
    public $role;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Module::truncate();
        Permission::truncate();
        Role::truncate();

        Role::create(['name' => 'admin']);

        $this->role = Role::create(['name' => 'super_admin']);

        $admin = User::whereEmail('admin@mail.com')->first();

        $admin->assignRole($this->role);

        $this->createAdminPermissions('Administrator - Users', [
            ['name' => 'create users'],
            ['name' => 'read users'],
            ['name' => 'update users'],
            ['name' => 'delete users'],
        ]);

        $this->createAdminPermissions('Others', [
            ['name' => 'view theme'],
        ]);

        $this->createAdminPermissions('Administrator - Roles', [
            ['name' => 'create roles'],
            ['name' => 'read roles'],
            ['name' => 'update roles'],
            ['name' => 'delete roles'],
        ]);

        $this->createAdminPermissions('Administrator - Permissions', [
            ['name' => 'read permissions'],
            ['name' => 'update permissions'],
        ]);

        Schema::enableForeignKeyConstraints();
    }

    /**
     * @param $moduleName
     * @param $permissions
     * @return void
     */
    private function createAdminPermissions($moduleName = null, $permissions): void
    {
        if ($moduleName) {
            $module = Module::firstOrCreate(['name' => $moduleName]);
        }

        foreach ($permissions as $permission) {
            if ($module) {
                $permission['module_id'] = $module->id;
            }
            $permission = Permission::create($permission);

            $permission->assignRole($this->role);
        }
    }
}
