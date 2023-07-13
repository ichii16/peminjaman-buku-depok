<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'komik', 'novel', 'fantasy', 'fiction', 'mystery', 'horror', 'romance', 'western'
        ];

        foreach ($data as $value) {
            Category::insert([
                'name' => $value,
                'slug' => \Illuminate\Support\Str::slug($value), // Tambahkan kolom 'slug'
                'created_at' => now(), // Tambahkan kolom 'created_at'
                'updated_at' => now() // Tambahkan kolom 'updated_at'
            ]);
        }
    }
}
