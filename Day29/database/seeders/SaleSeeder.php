<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseCycle;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengambil semua siklus pembelian yang sudah ada
        $purchaseCycles = PurchaseCycle::all();

        // Mengisi tabel sales dengan data contoh
        foreach ($purchaseCycles as $cycle) {
            Sale::create([
                'product_name' => 'Product ' . $cycle->id,
                'amount' => rand(50, 200), // Menghasilkan jumlah acak antara 50 dan 200
                'purchase_cycle_id' => $cycle->id,
            ]);
        }
    }
}
