<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Customer::truncate();

        $customer = new Customer([
            'name' => '鈴木達也',
            'ruby' => 'スズキタツヤ',
            'gender' => '男',
            'birth' => '1976-08-25',
            'tel' => '0464582145',
            'address' => '千葉県八街市沖4258',
            'mail' => 'tatuya.0825@email.com',
            'job' => '自営業',
            'company' => '大衆食堂すずき'
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '鈴木智子',
            'ruby' => 'スズキトモコ',
            'gender' => '女',
            'birth' => '1977-10-05',
            'tel' => '0464582145',
            'address' => '千葉県八街市沖4258',
            'mail' => '',
            'job' => '自営業',
            'company' => '大衆食堂すずき'
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '鈴木飛鳥',
            'ruby' => 'スズキアスカ',
            'gender' => '女',
            'birth' => '2001-01-19',
            'tel' => '0464582145',
            'address' => '千葉県八街市沖4258',
            'mail' => 'asuka.asuka@gmail.co.jp',
            'job' => '学生',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '成瀬義行',
            'ruby' => 'ナルセヨシユキ',
            'gender' => '男	',
            'birth' => '1978-06-23
',
            'tel' => '0477236979',
            'address' => '千葉県銚子市春日町3-9-15春日町シティ403',
            'mail' => 'yoshiyuki0678@zyhdf.fjclu.qy',
            'job' => '学生',
            'company' => ''
        ]);
        $customer->save();


    }
}
