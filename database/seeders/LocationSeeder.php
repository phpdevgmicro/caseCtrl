<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            [
                'address' => '13988 Diplomat Dr Ste 100C',
                'city' => 'Farmers Branch',
                'state' => 'TX',
                'postal_code' => '75234',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2700 W Pleasant Run Rd Ste 370',
                'city' => 'Lancaster',
                'state' => 'TX',
                'postal_code' => '75146',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2304 W Michigan Ave Ste 370',
                'city' => 'Midland',
                'state' => 'TX',
                'postal_code' => '79701',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1304 W Texas Ave Ste 370',
                'city' => 'Midland',
                'state' => 'TX',
                'postal_code' => '79701',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2727 Bolton Boone Dr Ste 112',
                'city' => 'DeSoto',
                'state' => 'TX',
                'postal_code' => '75115',
                'location_type' => 'both'
                
            ],
            [
                'address' => '221 Regency Pkwy Ste 105',
                'city' => 'Mansfield',
                'state' => 'TX',
                'postal_code' => '76063',
                'location_type' => 'both'
                
            ],
            [
                'address' => '6101 Windhaven Pkwy Ste 145',
                'city' => 'Plano',
                'state' => 'TX',
                'postal_code' => '75093',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1395 E Eldorado Pkwy Ste 400',
                'city' => 'Little Elm',
                'state' => 'TX',
                'postal_code' => '75068',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2603 Oaklawn Ave Ste A',
                'city' => 'Dallas',
                'state' => 'TX',
                'postal_code' => '75219',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1324 Brown St Ste 100',
                'city' => 'Waxahachie',
                'state' => 'TX',
                'postal_code' => '75165',
                'location_type' => 'both'
                
            ],
            [
                'address' => '117 Jane Lane Ste 100',
                'city' => 'Hillsboro',
                'state' => 'TX',
                'postal_code' => '76645',
                'location_type' => 'both'
                
            ],
            [
                'address' => '5601 Bridge St Ste 102',
                'city' => 'Fort Worth',
                'state' => 'TX',
                'postal_code' => '76112',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2304 W Michigan Ave Ste 100',
                'city' => 'Midland',
                'state' => 'TX',
                'postal_code' => '79701',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1304 W Texas Ave Ste 102',
                'city' => 'Midland',
                'state' => 'TX',
                'postal_code' => '79701',
                'location_type' => 'both'
                
            ],
            [
                'address' => '220 E 3rd Ave Ste 100',
                'city' => 'Corsicana',
                'state' => 'TX',
                'postal_code' => '75110',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1615 W Ave L Ste 100',
                'city' => 'Temple',
                'state' => 'TX',
                'postal_code' => '76504',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2300 W Michigan Ave Ste 7',
                'city' => 'Midland',
                'state' => 'TX',
                'postal_code' => '79701',
                'location_type' => 'both'
                
            ],
            [
                'address' => '9461 LBJ Frwy Ste 110',
                'city' => 'Dallas',
                'state' => 'TX',
                'postal_code' => '75243',
                'location_type' => 'both'
                
            ],
            [
                'address' => '1401 Jane Lane Ste 105',
                'city' => 'West',
                'state' => 'TX',
                'postal_code' => '76691',
                'location_type' => 'both'
                
            ],
            [
                'address' => '802 W Lampasas Ste 105',
                'city' => 'Ennis',
                'state' => 'TX',
                'postal_code' => '75119',
                'location_type' => 'both'
                
            ],
            [
                'address' => '2380 E Park Blvd Ste 300',
                'city' => 'Plano',
                'state' => 'TX',
                'postal_code' => '75074',
                'location_type' => 'both'
                
            ],
            [
                'address' => '500 E 4th street Ste 300',
                'city' => 'Odessa',
                'state' => 'TX',
                'postal_code' => '79761',
                'location_type' => 'both'
            ],
            [
                'address' => '1029 Long Prairie Rd Suite D',
                'city' => 'Flower Mound',
                'state' => 'TX',
                'postal_code' => '75022',
                'location_type' => 'both'
                
            ],
        ]);
    }
}
