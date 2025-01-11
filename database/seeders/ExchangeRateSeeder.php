<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exchange_rates')->insert([
            'currency_id' => 2,
            'Sell' => "500",
            'Buy' => "499",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('exchange_rates')->insert([
            'currency_id' => 3,
            'Sell' => "2020",
            'Buy' => "2019",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
