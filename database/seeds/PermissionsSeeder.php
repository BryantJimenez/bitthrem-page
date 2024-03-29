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

        // Permisos de Centro de Ayudas
        Permission::create(['name' => 'helps.index']);
        Permission::create(['name' => 'helps.create']);
        Permission::create(['name' => 'helps.edit']);
        Permission::create(['name' => 'helps.delete']);
        Permission::create(['name' => 'helps.active']);
        Permission::create(['name' => 'helps.deactive']);

        // Permisos de Articulos
        Permission::create(['name' => 'articles.index']);
        Permission::create(['name' => 'articles.create']);
        Permission::create(['name' => 'articles.edit']);
        Permission::create(['name' => 'articles.delete']);
        Permission::create(['name' => 'articles.active']);
        Permission::create(['name' => 'articles.deactive']);

        // Permisos de Mejores Usuarios
        Permission::create(['name' => 'bests.index']);
        Permission::create(['name' => 'bests.create']);
        Permission::create(['name' => 'bests.edit']);
        Permission::create(['name' => 'bests.delete']);
        Permission::create(['name' => 'bests.active']);
        Permission::create(['name' => 'bests.deactive']);

        // Permisos de Idiomas
        Permission::create(['name' => 'languages.index']);
        Permission::create(['name' => 'languages.create']);

        // Permisos de Traducciones
        Permission::create(['name' => 'translations.index']);
        Permission::create(['name' => 'translations.create']);

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
