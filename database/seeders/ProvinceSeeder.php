<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    private function data(): array
    {
        return [
            [
                'name' => 'قم',
                'name_en' => 'Qom',
                'slug' => 'qom',
                'cities' => [
                    [
                        'name' => 'قم',
                        'name_en' => 'Qom',
                        'slug' => 'qom',
                    ]
                ]
            ]
        ];
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = $this->data();

        foreach ($provinces as $province) {

            $prov = Province::create([
                'name' => $province['name'],
                'name_en' => $province['name_en'],
                'slug' => $province['slug']
            ]);

            foreach($province['cities'] as $city) {

                $prov->cities()->create([...$city, 'province_id' => $prov->id]);
            }
        }
    }
}
