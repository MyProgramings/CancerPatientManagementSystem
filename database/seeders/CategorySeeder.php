<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => "ألف",
            'value' => "1000",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "خمسمائة",
            'value' => "500",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "مائة",
            'value' => "100",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "خمسين",
            'value' => "50",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "عشرين",
            'value' => "20",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "عشرة",
            'value' => "10",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "خمسة",
            'value' => "5",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
