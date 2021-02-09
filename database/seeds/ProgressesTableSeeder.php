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
            'subject' => '有効情報',
            'body' => '店舗が老朽化により損壊。修繕についての相談あり。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '2',
            'subject' => '有効情報',
            'body' => '他行にて定期預金の満期あり。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '1',
            'subject' => '進捗',
            'body' => 'リフォームローンのご説明のため訪問。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '1',
            'subject' => '進捗',
            'body' => 'リフォームローン1,000,000円申込受付。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '2',
            'subject' => '進捗',
            'body' => 'キャンペーン商品の提案のため訪問。準備でき次第ご来店頂けるとのこと。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '1',
            'subject' => '契約成立',
            'body' => 'リフォームローン1,000,000円実行。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '2',
            'subject' => '契約成立',
            'body' => '来店時、定期預金5,000,000円、契約。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '4',
            'subject' => '有効情報',
            'body' => 'コロナ禍で売り上げ減少。運転資金の相談あり。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '3',
            'subject' => '有効情報',
            'body' => '大型２輪の免許を取得。バイク購入の予定があるとのこと。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '3',
            'subject' => '進捗',
            'body' => 'ご来店時、購入予定のバイクの見積書をお預かり。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '3',
            'subject' => '進捗',
            'body' => 'マイカーローンのご提案のため訪問。申込受付。金額1,000,000円',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '6',
            'subject' => '有効情報',
            'body' => '就職のため、引っ越しの資金が必要とのこと。フリーローンを推進。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '3',
            'subject' => '進捗',
            'body' => 'マイカーローン1,000,000円実行',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '4',
            'subject' => '進捗',
            'body' => 'セーフティネット４号にて対応。認定書申請中。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '6',
            'subject' => '有効情報',
            'body' => '就職のため、引っ越しの資金が必要とのこと。フリーローンを推進。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '4',
            'subject' => '進捗',
            'body' => '認定書受領。保証協会に申込。書類郵送。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '7',
            'subject' => '有効情報',
            'body' => '所有車が購入から10年経過。買い替えを検討中とのこと。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '4',
            'subject' => '進捗',
            'body' => '保証協会より承諾の連絡。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '10',
            'subject' => '有効情報',
            'body' => '年金の受取金融機関が家から離れているため、当行に変更したいとのご相談。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '4',
            'subject' => '契約成立',
            'body' => '運転資金10,000,000円実行',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '6',
            'subject' => '進捗',
            'body' => 'WEBにてフリーローン申込あり。金額500,000円',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '9',
            'subject' => '有効情報',
            'body' => '複数ローンの一本化をしたいとのご要望。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '6',
            'subject' => '契約成立',
            'body' => 'フリーローン500,000円実行',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '7',
            'subject' => '進捗',
            'body' => '訪問しマイカーローン推進。前向きに検討とのこと。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '8',
            'subject' => '有効情報',
            'body' => '娘が受験のため、受験費用を借りたいとのご相談。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '5',
            'customer_id' => '9',
            'subject' => '有効情報',
            'body' => '複数ローンの一本化をしたいとのご要望。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '4',
            'customer_id' => '9',
            'subject' => '進捗',
            'body' => '一本化でフリーローンにて申込。金額3,000,000円',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '2',
            'customer_id' => '9',
            'subject' => '進捗',
            'body' => '審査通らず、お断りの連絡。',
        ]);

        DB::table('progresses')->insert([
            'user_id' => '3',
            'customer_id' => '10',
            'subject' => '契約成立',
            'body' => '訪問。振込指定先を当行へ変更。',
        ]);

    }
}
