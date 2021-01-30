# SFA的業務効率化アプリ
最終更新：2021/01/27

## このプロジェクトについて
私は現在、金融機関で営業職として仕事をしています。業務を行う中で、不便さを感じることが多々あります。それらを解決し、一つにまとめて管理できるようなシステムがあれば業務の効率化が図れると考えました。WEB系開発企業のバックエンドエンジニアとして転職を決意するにあたり、開発の練習として今回のアプリを制作することに決めました。

## 目的
- 普段の不便さを解決するようなアプリをつくる
- 内容的にはSFAに近いものをつくる
- 簡易的な業務効率化アプリを開発し、開発経験を積む
- 今学習中であり、今回使うLaravelの理解を深める
- バックエンド理解のため、フロントエンドは最低限で実装する
- ひとりアジャイル開発で行う

## 環境
- **開発言語**： PHP 8.0.0
- **使用フレームワーク**： Laravel 6.20.12
- **データベース**： MySQL 8.0.0
- **開発OS**： Windows 10 Home
- **バージョン管理**： GitHub

## 主な機能
- 顧客情報管理
- 営業進捗管理
- スケジュール管理
- 日報管理
- タスク管理
- 天気予報API？
- 郵便番号から住所を取得するAPI?

## 開発
### データベース設計
- 必要となるデータベースは以下の通り  

        - データベース名：sfa_laravel
        - テーブル名
          - Users ユーザー情報
          - Customers 顧客情報
          - Progresses 交渉進捗
          - Schedules 予定管理
          - Appointments アポ予定

### 顧客情報管理機能
**概要**
- 顧客の名前、年齢、住所等の属性情報をリストで表示、並び替え・検索機能をつける（できれば非同期）。
- 顧客名をクリックすると詳細画面へ。法人と個人で表示を分ける。今までの交渉経過やアポ予定を表示。
- 同世帯は電話番号で紐づける(名寄せ)

**経過**
1. customersテーブルの作成とseeder,factoryでダミーレコード作成
2. 顧客一覧画面、登録画面の作成、CustomerRequest.phpでバリデーション
3. 顧客詳細、編集画面の作成。年齢計算の関数を作成し最新の年齢を表示するように。

**工夫点**
- customersテーブルに年齢カラムをつくらない
　年齢カラムを作ってしまうと経年時に年齢が反映されなくなってしまうため。そのため、顧客レコード取得時に年齢を計算する関数を用意し正確な年齢を反映できるようにした。

### 営業進捗管理
**概要**
- それぞれのユーザーが行った営業の進捗を登録し、情報を共有できるようにする。
- 進捗情報を顧客IDと紐づけてデータベースへ格納。顧客詳細画面でも表示できるようにする。
- 進捗の種類は、有効情報、営業進捗、契約成立で分ける。

**経過**
1. progressテーブルの作成。ユーザー、対象顧客とリレーションをし一覧表示

**工夫点**
- リレーション先の子テーブルを並び替える

//変更前

    - CustomerController.php
            public function show(Customer $customer)
            {
                $customer->age = Customer::getAge($customer->birth);
                $progresses = Progress::latest()->get();
                return view('customers.show')->with(['customer' => $customer, 'progresses', $progresses]);  
            }
    - show.blade.php
            @forelse ($prpgresses as $progress)
            @empty
            @endforelse

//変更後

    - CustomerController.php
            public function show(Customer $customer)
                {
                    $customer->age = Customer::getAge($customer->birth);
                    // $progresses = Progress::latest()->get();
                    return view('customers.show')->with('customer', $customer);
                }
    - show.blade.php
            @forelse ($customer->progresses()->orderby('id', 'desc')->get() as $progress)
            @empty
            @endforelse

## 課題点
