<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ["1 Mes", "3 Meses", "6 Meses", "12 Meses"];
        $times = [1,3,6,12];
        for ($i=0; $i < 4; $i++) {
            $newMembership = Membership::create([
                "membership_name" => $names[$i],
                "months" => $times[$i]
            ]);
        }
    }
}
