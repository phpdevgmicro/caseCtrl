<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SurgeonClinicLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addressIds = DB::table('locations')->pluck('id')->toArray();
        $surgeons = DB::table('surgeons')->get();
        
        foreach ($surgeons as $surgeon) {
            // Get a random number of clinic locations between 5 and 6
            $numberOfLocations = rand(5, 6);
            $randomLocationIds = array_rand(array_flip($addressIds), $numberOfLocations);
            
            // If only one location is picked, ensure it's an array
            if (!is_array($randomLocationIds)) {
                $randomLocationIds = [$randomLocationIds];
            }

            foreach ($randomLocationIds as $locationId) {
                DB::table('surgeon_clinic_locations')->insert([
                    'surgeon_id' => $surgeon->id,
                    'location_id' => $locationId                    
                ]);
            }
        }
    }
}
