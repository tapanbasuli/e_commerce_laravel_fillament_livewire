<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Membuat data produk
        DB::table('categories')->insert([
            [
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'image' => '',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Women',
                'slug' => Str::slug('Women'),
                'image' => '',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
