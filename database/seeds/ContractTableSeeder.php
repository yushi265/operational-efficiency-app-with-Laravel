<?php

use Illuminate\Database\Seeder;
use App\Contract;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::truncate();
        DB::table('contracts')->insert([
            'user_id' => '2',
            'customer_id' => '1',
            'contract_type' => '04',
            'amount' => '1000000',
            'due_date' => '2024-01-12',
            'created_at' => '2021-01-12 10:00:00',
        ]);

        DB::table('contracts')->insert([
            'user_id' => '2',
            'customer_id' => '2',
            'contract_type' => '03',
            'amount' => '5000000',
            'due_date' => '2022-01-13',
            'created_at' => '2021-01-13 10:00:00',
        ]);

        DB::table('contracts')->insert([
            'user_id' => '2',
            'customer_id' => '3',
            'contract_type' => '04',
            'amount' => '1000000',
            'due_date' => '2026-01-21',
            'created_at' => '2021-01-21 10:00:00',
        ]);

        DB::table('contracts')->insert([
            'user_id' => '2',
            'customer_id' => '4',
            'contract_type' => '04',
            'amount' => '10000000',
            'due_date' => '2031-02-01',
            'created_at' => '2021-02-01 10:00:00',
        ]);

        DB::table('contracts')->insert([
            'user_id' => '2',
            'customer_id' => '6',
            'contract_type' => '04',
            'amount' => '500000',
            'due_date' => '2024-02-04',
            'created_at' => '2021-02-04 10:00:00',
        ]);
    }
}
