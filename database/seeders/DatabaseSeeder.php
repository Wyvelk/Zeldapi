<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monster;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/seeders/monsters.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                if(count($data) < 8)
                    continue;
                Monster::create([
                    "name" => $data['0'],
                    "species" => $data['1'],
                    "type" => $data['2'],
                    "color" => $data['3'],
                    "description" => $data['4'],
                    "img_url" => $data['5'],
                    "loots" => $data['6'],
                    "biome" => $data['7'],
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
