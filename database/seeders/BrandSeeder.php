<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    public function run()
    {
        // Membuat data produk
        DB::table('brands')->insert([
            [
                'name' => 'Puma',
                'slug' => Str::slug('Puma'),
                'image' => '',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adidas',
                'slug' => Str::slug('Adidas'),
                'image' => '',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
