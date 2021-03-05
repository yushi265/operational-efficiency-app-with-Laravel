<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'システム管理者',
            'email' => 'system-admin@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 1,
        ]);

        factory(User::class)->create([
            'name' => '管理者',
            'email' => 'admin@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 5,
        ]);

        factory(User::class)->create([
            'name' => '営業係',
            'email' => 'sales@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 10,
        ]);

        factory(User::class)->create([
            'name' => '融資係',
            'email' => 'loan@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 10,
        ]);

        factory(User::class)->create([
            'name' => '窓口係',
            'email' => 'teller@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 10,
        ]);
    }
}
