<?php
namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::factory()
            ->count(25)
            ->hasInvoice(10)
            ->create();

        Customer::factory()
            ->count(100)
            ->hasInvoice(5)
            ->create();

        Customer::factory()
            ->count(100)
            ->hasInvoice(3)
            ->create();

        Customer::factory()
            ->count(5)
            ->create();
    }
}