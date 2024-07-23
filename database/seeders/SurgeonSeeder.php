<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SurgeonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        // Surgeon data with NPI and names
        $surgeons = [
            ['fullname' => 'Aaron Eubanks', 'npi' => 1144422726],
            ['fullname' => 'Abdul Rashid', 'npi' => 1821288085],
            ['fullname' => 'Ahsan Ali', 'npi' => 1396835963],
            ['fullname' => 'Amir Malik', 'npi' => 1801814520],
            ['fullname' => 'Aniraphone Laochareun', 'npi' => 1093203176],
            ['fullname' => 'David Cosenza', 'npi' => 1538461975],
            ['fullname' => 'David Masel', 'npi' => 1417937426],
            ['fullname' => 'Dilip Sengupta', 'npi' => 1184656282],
            ['fullname' => 'Henry Dees', 'npi' => 1659371375],
            ['fullname' => 'Jeannette Rackham', 'npi' => 1003878844],
            ['fullname' => 'Joaquin Oronoz', 'npi' => 1447229166],
            ['fullname' => 'John Tenny', 'npi' => 1548277924],
            ['fullname' => 'Kendra Alexander', 'npi' => 1003441460],
            ['fullname' => 'Lien Trinh', 'npi' => 1134503782],
            ['fullname' => 'Lyn Leach', 'npi' => 1134593841],
            ['fullname' => 'Payam Rafat', 'npi' => 1760584437],
            ['fullname' => 'Ravi Mydur', 'npi' => 1215198163],
            ['fullname' => 'Ravindra Chandrashekhar', 'npi' => 1245422955],
            ['fullname' => 'Raymond Fulp', 'npi' => 1770585994],
            ['fullname' => 'Robert Wolf', 'npi' => 1912974932],
            ['fullname' => 'Saad Hussain', 'npi' => 1871930594],
            ['fullname' => 'Stacey Ready', 'npi' => 1891396586],
            ['fullname' => 'Terry Madsen', 'npi' => 1518071653],
            ['fullname' => 'Victoria Campbell', 'npi' => 1831729193],
            ['fullname' => 'Maria Ponce', 'npi' => 1962133058],
            ['fullname' => 'Michael Smith', 'npi' => 1689664567],
            ['fullname' => 'Ola Yinka', 'npi' => 1134167711],
            ['fullname' => 'Chelsea Edwards', 'npi' => 1740543628],
            ['fullname' => 'David Slater', 'npi' => 1477526994],
            ['fullname' => 'Alok Kushwaha', 'npi' => 1922039155],
            ['fullname' => 'Gregg Podleski', 'npi' => 1376596395],
            ['fullname' => 'Scott Moulton', 'npi' => 1710040761],
            ['fullname' => 'Michael Olatunji', 'npi' => 1750303863],
            ['fullname' => 'Derek Molina', 'npi' => 1467932202],
            ['fullname' => 'John Rosell', 'npi' => 1972814648],
            ['fullname' => 'Eric Naifeh', 'npi' => 1386677094],
            ['fullname' => 'Madison Flores', 'npi' => 1942811914],
            ['fullname' => 'Duane Pitt', 'npi' => 1376529255],
            ['fullname' => 'Tenicia Jones', 'npi' => 1396051132],
            ['fullname' => 'Ismail Boodhwani', 'npi' => 1033685680],
            ['fullname' => 'Nicholaos Bellos', 'npi' => 1962471128],
            ['fullname' => 'Abraham Chukwu', 'npi' => 1902070766]
        ];

        foreach ($surgeons as $surgeon) {
            DB::table('surgeons')->insert([
                'fullname' => $surgeon['fullname'],
                'specialty' => 'Surgery',
                'npi' => $surgeon['npi'],                
                'is_active' => 1,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
