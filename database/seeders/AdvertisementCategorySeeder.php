<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementCategorySeeder extends Seeder
{
    private function data()
    {
        return [
            [
                'id' => 1,
                'name' => 'خودرو',
                'name_en' => 'car',
                'slug' => 'car',
                'parent_id' => null,
            ],
            [
                'id' => 2,
                'name' => 'سواری و وانت',
                'name_en' => 'personal car',
                'slug' => 'personal-car',
                'parent_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'اتوبوس و کامیونت',
                'name_en' => 'bus and track',
                'slug' => 'bus-track',
                'parent_id' => 1,
            ]
        ];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data() as $adCategory) {
            DB::table('advertisement_categories')->insert($adCategory);
        }
    }
}
