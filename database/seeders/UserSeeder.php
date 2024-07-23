<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'user']);
          // Create the user
        $user = User::create([
            'name' => 'David Rodger',
            'email' => 'developer0945@gmail.com',
            'password' => Hash::make('admin')
        ]);

        // Assign the role to the user
        $user->assignRole($role);
    }
}