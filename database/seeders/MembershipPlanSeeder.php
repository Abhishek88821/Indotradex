<?php

namespace Database\Seeders;

use App\Models\MembershipFee;
use Illuminate\Database\Seeder;

class MembershipPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'plan' => 'SILVER',
                'USD' => '100',
                'IDR' => '1000000',
                'INR' => '7500',
                'status' => '1',
            ],
            [
                'plan' => 'GOLD',
                'USD' => '200',
                'IDR' => '3000000',
                'INR' => '15000',
                'status' => '1',
            ],
            [
                'plan' => 'DIAMOND',
                'USD' => '300',
                'IDR' => '4500000',
                'INR' => '22500',
                'status' => '1',
            ],
        ];

        foreach ($data as $planData) {
            MembershipFee::firstOrCreate(
                ['plan' => $planData['plan']],
                $planData
            );
        }
    }
}
