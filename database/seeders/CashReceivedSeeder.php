<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CashReceivedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cash_receiveds')->insert([
            'user_id' => 1,
            'currency_id' => 1,
            'category_id' => 1,
            'amount' => 4,
            'total' => 2000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
