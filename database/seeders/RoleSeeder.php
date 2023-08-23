<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Admin', 'Supplier', 'Buyer', 'Product Owner',
            'Investor', 'Agent', 'Consultant', 'Member'
        ];
    
        foreach ($roles as $role) {
            $existingRole = Role::where('name', $role)->first();
    
            if (!$existingRole) {
                Role::create([
                    'name' => $role,
                    'status' => 1,
                ]);
            }
        }
    }
    
}
