<?php

use Illuminate\Database\Seeder;
use App\Progress;

class ProgressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Progress::truncate();
        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '1',
            'status' => '1',
            'body' => '店舗が老朽化により損壊。修繕についての相談あり。',
            'created_at' => '2021-01-04 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '2',
            'status' => '1',
            'body' => '他行にて定期預金の満期あり。',
            'created_at' => '2021-01-05 10:00:00',
            ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '1',
            'status' => '5',
            'body' => 'リフォームローンのご説明のため訪問。',
            'created_at' => '2021-01-06 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '1',
            'status' => '5',
            'body' => 'リフォームローン1,000,000円申込受付。',
            'created_at' => '2021-01-07 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '2',
            'status' => '5',
            'body' => 'キャンペーン商品の提案のため訪問。準備でき次第ご来店頂けるとのこと。',
            'created_at' => '2021-01-08 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '1',
            'status' => '9',
            'body' => 'リフォームローン1,000,000円実行。',
            'created_at' => '2021-01-12 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '2',
            'status' => '9',
            'body' => '来店時、定期預金5,000,000円、契約。',
            'created_at' => '2021-01-13 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '4',
            'status' => '1',
            'body' => 'コロナ禍で売り上げ減少。運転資金の相談あり。',
            'created_at' => '2021-01-14 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '3',
            'status' => '1',
            'body' => '大型２輪の免許を取得。バイク購入の予定があるとのこと。',
            'created_at' => '2021-01-15 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '3',
            'status' => '5',
            'body' => 'ご来店時、購入予定のバイクの見積書をお預かり。',
            'created_at' => '2021-01-18 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '3',
            'status' => '5',
            'body' => 'マイカーローンのご提案のため訪問。申込受付。金額1,000,000円',
            'created_at' => '2021-01-19 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '6',
            'status' => '1',
            'body' => '就職のため、引っ越しの資金が必要とのこと。フリーローンを推進。',
            'created_at' => '2021-01-20 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '3',
            'status' => '5',
            'body' => 'マイカーローン1,000,000円実行',
            'created_at' => '2021-01-21 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '4',
            'status' => '5',
            'body' => 'セーフティネット４号にて対応。認定書申請中。',
            'created_at' => '2021-01-22 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '6',
            'status' => '1',
            'body' => '就職のため、引っ越しの資金が必要とのこと。フリーローンを推進。',
            'created_at' => '2021-01-25 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '4',
            'status' => '5',
            'body' => '認定書受領。保証協会に申込。書類郵送。',
            'created_at' => '2021-01-26 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '7',
            'status' => '1',
            'body' => '所有車が購入から10年経過。買い替えを検討中とのこと。',
            'created_at' => '2021-01-27 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '4',
            'status' => '5',
            'body' => '保証協会より承諾の連絡。',
            'created_at' => '2021-01-28 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '10',
            'status' => '1',
            'body' => '年金の受取金融機関が家から離れているため、当行に変更したいとのご相談。',
            'created_at' => '2021-01-29 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '4',
            'status' => '9',
            'body' => '運転資金10,000,000円実行',
            'created_at' => '2021-02-01 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '6',
            'status' => '5',
            'body' => 'WEBにてフリーローン申込あり。金額500,000円',
            'created_at' => '2021-02-02 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '9',
            'status' => '1',
            'body' => '複数ローンの一本化をしたいとのご要望。',
            'created_at' => '2021-02-03 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '6',
            'status' => '9',
            'body' => 'フリーローン500,000円実行',
            'created_at' => '2021-02-04 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '7',
            'status' => '5',
            'body' => '訪問しマイカーローン推進。前向きに検討とのこと。',
            'created_at' => '2021-02-05 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '8',
            'status' => '1',
            'body' => '娘が受験のため、受験費用を借りたいとのご相談。',
            'created_at' => '2021-02-08 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '9',
            'status' => '1',
            'body' => '複数ローンの一本化をしたいとのご要望。',
            'created_at' => '2021-02-09 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '9',
            'status' => '5',
            'body' => '一本化でフリーローンにて申込。金額3,000,000円',
            'created_at' => '2021-02-10 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '9',
            'status' => '5',
            'body' => '審査通らず、お断りの連絡。',
            'created_at' => '2021-02-12 10:00:00',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '10',
            'status' => '9',
            'body' => '訪問。振込指定先を当行へ変更。',
            'created_at' => '2021-02-15 10:00:00',
        ]);

    }
}
