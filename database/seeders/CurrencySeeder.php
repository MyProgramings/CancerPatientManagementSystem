<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            'name' => "ريال سعودي",
            'shortcut' => "SAR",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('currencies')->insert([
            'name' => "دولار امريكي",
            'shortcut' => "USD",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('currencies')->insert([
            'name' => "ريال يمني",
            'shortcut' => "YER",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
