<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BenefitsofMembership;

class MembershipBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'silver' => 'NO',
                'gold' => 'View More Project Details',
                'diamond' => 'View More Project Details',
                'status' => 1,
            ],
            [
                'silver' => 'Priority',
                'gold' => 'Priority',
                'diamond' => 'Priority',
                'status' => 1,
            ],
            [
                'silver' => 'Can Download Selected PDF Resources',
                'gold' => 'Can Download All',
                'diamond' => 'Can Download All',
                'status' => 1,
            ],
            [
                'silver' => 'Consult on Call – 1/ Month',
                'gold' => 'Consult on Call – 2/ Month',
                'diamond' => 'Consult on Call – 3/ Month',
                'status' => 1,
            ],
            [
                'silver' => 'Meeting for Guidance – 1/Year',
                'gold' => '2/Year',
                'diamond' => '3/Year',
                'status' => 1,
            ],
            [
                'silver' => 'Visit Support – 1 place/Year',
                'gold' => '2 Places/ Year',
                'diamond' => '3 Places/ Year',
                'status' => 1,
            ],
            [
                'silver' => 'Discounted Boarding & Lodging',
                'gold' => 'YES',
                'diamond' => 'YES',
                'status' => 1,
            ],
            [
                'silver' => 'Other Fee Discounts and Supports',
                'gold' => 'YES',
                'diamond' => 'YES',
                'status' => 1,
            ],
        ];

        foreach ($data as $benefitData) {
            BenefitsofMembership::firstOrCreate(
                ['silver' => $benefitData['silver']],
                $benefitData
            );
        }
    }
}
