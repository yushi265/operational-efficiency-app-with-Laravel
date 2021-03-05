<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use App\User;

class AppTest extends TestCase
{
    public const SYSTEM_ADMIN = 1;
    public const ADMIN = 5;
    public const GENERAL = 10;
    /**
     * ゲストユーザーテスト
     *
     * @return void
     */
    public function testGuestUser()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(302);

        $response = $this->get('/customers');
        $response->assertStatus(302);

        $response = $this->get('/progresses');
        $response->assertStatus(302);

        $response = $this->get('/contracts');
        $response->assertStatus(302);

        $response = $this->get('/admin');
        $response->assertStatus(302);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }

    /**
     * 一般ユーザーテスト
     *
     * @return void
     */
    public function testGeneralUser()
    {
        $user = factory(User::class)->create([
            'name' => '一般ユーザー',
            'email' => 'general@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => self::GENERAL,
        ]);

        $response = $this->actingAs($user)->get('/login');
        $response->assertStatus(302);

        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/customers');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/progresses');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/contracts');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(403);

        $response = $this->actingAs($user)->get('/no_route');
        $response->assertStatus(404);

        $user->delete();
    }

    /**
     * 管理者ユーザーテスト
     *
     * @return void
     */
    public function testAdminUser()
    {
        $user = factory(User::class)->create([
            'name' => '管理者ユーザー',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => self::ADMIN,
        ]);

        $response = $this->actingAs($user)->get('/login');
        $response->assertStatus(302);

        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/customers');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/progresses');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/contracts');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(403);

        $response = $this->actingAs($user)->get('/no_route');
        $response->assertStatus(404);

        $user->delete();
    }

    /**
     * システム管理者ユーザーテスト
     *
     * @return void
     */
    public function testSystemAdminUser()
    {
        $user = factory(User::class)->create([
            'name' => 'システム管理ユーザー',
            'email' => 'system_admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => self::SYSTEM_ADMIN,
        ]);

        $response = $this->actingAs($user)->get('/login');
        $response->assertStatus(302);

        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/customers');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/progresses');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/contracts');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/no_route');
        $response->assertStatus(404);

        $user->delete();
    }

    /**
     * Usersテーブルのテスト
     *
     * @return void
     */
    public function testUsers()
    {
        $user = new \App\User;
        $user->name = "テストユーザー";
        $user->email = "test@test.com";
        $user->password = \Hash::make('password');
        $user->save();

        $readUser = \App\User::where('name', 'テストユーザー')->first();
        $this->assertNotNull($readUser);            // データが取得できたかテスト
        $this->assertTrue(\Hash::check('password', $readUser->password)); // パスワードが一致しているかテスト

        $admin_role_num = 5;
        $user->role = $admin_role_num;
        $user->save();
        $this->assertEquals($admin_role_num, $user->role);


        \App\User::where('email', 'test@test.com')->delete(); // テストデータの削除
    }

    /**
     * Customersテーブルのテスト
     *
     * @return void
     */
    public function testCustomers()
    {
        $customer = new \App\Customer([
            'name' => 'テストカスタマー',
            'ruby' => 'テストカスタマー',
            'gender' => '2',
            'birth' => '2020-01-01',
            'tel' => '0123456789',
            'address' => '千葉県千葉市千葉1000',
            'mail' => 'customer@test.com',
            'job' => '会社員',
            'company' => '株式会社テスト'
        ]);
        $customer->save();

        $readCustomer = \App\Customer::where('name', 'テストカスタマー')->first();
        $this->assertNotNull($readCustomer);

        $customer->name = 'テスト顧客';
        $customer->ruby = 'テストコキャク';
        $customer->gender = '1';
        $customer->birth = '2000-12-31';
        $customer->tel = '9876543210';
        $customer->address = '千葉県千葉市千葉5000';
        $customer->mail = 'customer_edited@test.com';
        $customer->job = '学生';
        $customer->company = '';

        $customer->save();

        $editedCustomer = \App\Customer::where('name', 'テスト顧客')
                                        ->where('ruby', 'テストコキャク')
                                        ->where('gender', '1')
                                        ->where('birth', '2000-12-31')
                                        ->where('tel', '9876543210')
                                        ->where('address', '千葉県千葉市千葉5000')
                                        ->where('mail', 'customer_edited@test.com')
                                        ->where('job', '学生')
                                        ->where('company', '')
                                        ->first();
        $this->assertNotNull($editedCustomer);

        \App\Customer::where('name', 'テスト顧客')->delete();
    }

    /**
     * Progressesテーブルのテスト
     *
     * @return void
     */
    // public function testProgresses()
    // {

    // }
}
