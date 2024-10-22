<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseCycle;

class PurchaseCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseCycle::create(['cycle_name' => 'Monthly']);
        PurchaseCycle::create(['cycle_name' => 'Quarterly']);
        PurchaseCycle::create(['cycle_name' => 'Yearly']);
    }
}
