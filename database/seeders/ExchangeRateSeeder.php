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
            'currency_id' => 1,
            'Sell' => "500",
            'Buy' => "499",
            'created_at' => '2025-01-13 09:11:18',
        ]);

        DB::table('exchange_rates')->insert([
            'currency_id' => 2,
            'Sell' => "2091",
            'Buy' => "2074",
            'created_at' => '2025-01-13 09:11:18',
        ]);

        DB::table('exchange_rates')->insert([
            'currency_id' => 1,
            'Sell' => "563",
            'Buy' => "499",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('exchange_rates')->insert([
            'currency_id' => 2,
            'Sell' => "2191",
            'Buy' => "2174",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
