<?php

namespace Database\Seeders;

use Database\Seeders\Auth\RolesSeeder;
use Database\Seeders\Auth\UsersRolesSeeder;
use Database\Seeders\Auth\UsersSeeder;
use Database\Seeders\PurchaseCycleSeeder;
use Database\Seeders\SaleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UsersSeeder::class);
        //  $this->call(RolesSeeder::class);
        //  $this->call(UsersRolesSeeder::class);
         $this->call([
            PurchaseCycleSeeder::class,
            SaleSeeder::class,
            UsersSeeder::class,
            RolesSeeder::class,
            UsersRolesSeeder::class,
        ]);
    }
}
