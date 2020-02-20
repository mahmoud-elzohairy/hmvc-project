<?php

use Illuminate\Database\Seeder;
use Customers\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Mahmoud Hamdy',
        ]);
    }
}
