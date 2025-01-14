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
        //------------------Saudi----------------------------
        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "خمس مئة ريال",
            'value' => "500",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "مئتي ريال",
            'value' => "200",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "مئة ريال",
            'value' => "100",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "خمسون ريالاً",
            'value' => "50",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "عشرون ريالاً",
            'value' => "20",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "عشرة ريالات",
            'value' => "10",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 1,
            'name' => "خمسة ريالات",
            'value' => "5",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //-------------dollar---------------------
        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "مئة دولار",
            'value' => "100",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "خمسون دولاراً",
            'value' => "50",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "عشرون دولاراً",
            'value' => "20",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "عشرة دولارات",
            'value' => "10",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "خمسة دولارات",
            'value' => "5",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 2,
            'name' => "دولار واحد",
            'value' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //----------------Yemeni---------------------
        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "ألف ريال",
            'value' => "1000",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "خمس مئة ريال",
            'value' => "500",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "مئتي ريال",
            'value' => "200",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "مئة ريال",
            'value' => "100",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "خمسون ريالاً",
            'value' => "50",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "عشرون ريالاً",
            'value' => "20",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "عشرة ريالات",
            'value' => "10",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'currency_id' => 3,
            'name' => "خمسة ريالات",
            'value' => "5",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
