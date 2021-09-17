<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'name' => 'EUR'
        ]);

        Currency::create([
            'name' => 'INR'
        ]);

        Currency::create([
            'name' => 'GBP'
        ]);

        Currency::create([
            'name' => 'USD'
        ]);
    }
}
