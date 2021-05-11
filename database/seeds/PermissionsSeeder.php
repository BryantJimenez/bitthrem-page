<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permiso para Acceder al Panel Administrativo
        Permission::create(['name' => 'dashboard']);

        // Permisos de Usuarios
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);
        Permission::create(['name' => 'users.active']);
        Permission::create(['name' => 'users.deactive']);

        // Permisos de Categorías
        Permission::create(['name' => 'categories.index']);
        Permission::create(['name' => 'categories.create']);
        Permission::create(['name' => 'categories.edit']);
        Permission::create(['name' => 'categories.delete']);
        Permission::create(['name' => 'categories.active']);
        Permission::create(['name' => 'categories.deactive']);

        // Permisos de Preguntas
        Permission::create(['name' => 'questions.index']);
        Permission::create(['name' => 'questions.create']);
        Permission::create(['name' => 'questions.edit']);
        Permission::create(['name' => 'questions.delete']);
        Permission::create(['name' => 'questions.active']);
        Permission::create(['name' => 'questions.deactive']);

        // Permisos de Articulos
        Permission::create(['name' => 'articles.index']);
        Permission::create(['name' => 'articles.create']);
        Permission::create(['name' => 'articles.edit']);
        Permission::create(['name' => 'articles.delete']);
        Permission::create(['name' => 'articles.active']);
        Permission::create(['name' => 'articles.deactive']);

        // Permisos de Ajustes
        Permission::create(['name' => 'settings.edit']);

    	$superadmin=Role::create(['name' => 'Super Admin']);
        $superadmin->givePermissionTo(Permission::all());
        
        $admin=Role::create(['name' => 'Administrador']);
    	$admin->givePermissionTo(Permission::all());

    	$user=User::find(1);
    	$user->assignRole('Super Admin');
    }
}
