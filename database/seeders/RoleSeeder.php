<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = new User();
        $usuario->name = 'Admin';
        $usuario->email = 'admin@gmail.com';
        $usuario->password = Hash::make('password');
        $role1 = Role::create(['name'=> 'Admin']);
        $usuario->assignRole($role1 );
        $usuario->save();
        $role2 = Role::create(['name'=> 'Cliente']);
        $role3 = Role::create(['name'=> 'Guardia']);
        $role4 = Role::create(['name'=> 'Operador']);
        $role5 = Role::create(['name'=> 'Asistente']);
        $role6 = Role::create(['name'=> 'Invitado']);
        Permission::create(['name' => 'admin.listar.destroy'])->syncRoles([$role1,$role3,$role4]);
        Permission::create(['name' => 'admin.crear'])->assignRole($role1);

        Permission::create(['name' => 'guardia.ver.horario'])->assignRole($role3);;
        Permission::create(['name' => 'guardia.registrar.vehiculo'])->syncRoles([$role3,$role4]);
        Permission::create(['name' => 'guardia.listar.ver'])->syncRoles([$role1,$role3,$role4]);
        
        Permission::create(['name' => 'invitado.completar'])->assignRole($role6);
        Permission::create(['name' => 'usur.crear.vehiculo'])->assignRole($role6);
    }
}
