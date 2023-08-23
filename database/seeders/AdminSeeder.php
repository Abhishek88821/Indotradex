<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
    
        AdminUser::firstOrCreate([
            'name' => 'Admin',
        ], [
            'email' => 'admin@example.com',
            'password' => Hash::make('Password'),
            'role_id' => $adminRole ? $adminRole->id : 1,
        ]);
    }
    
}
