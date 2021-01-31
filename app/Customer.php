<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = ['name', 'gender', 'birth', 'tel', 'address', 'mail', 'job', 'company', 'ordinary_deposit', 'time_deposit', 'loan_amount'];

    public function progresses()
    {
        return $this->hasMany('App\Progress');
    }

    public function contract()
    {
        return $this->hasMany('App\Contract');
    }

    /**
     * すべての顧客情報を取得
     * @return array $customers
     */
    public static function getAllCustomer()
    {
        $customers = DB::table('customers')->paginate(15);

        foreach ($customers as $customer) {
            $customer->age = self::getAge($customer->birth);
        }

        return $customers;
    }

    /**
     * 現在の年齢を取得
     * @param date $birth
     * @return int $age
     */
    public static function getAge($birth)
    {
        $birthday = strtotime($birth);

        $birth_year = (int)date("Y", $birthday);
        $birth_month = (int)date("m", $birthday);
        $birth_day = (int)date("d", $birthday);

        // 現在の年月日を取得
        $now_year = (int)date("Y");
        $now_month = (int)date("m");
        $now_day = (int)date("d");

        // 年齢を計算
        $age = $now_year - $birth_year;

        // 「月」「日」で年齢を調整
        if ($birth_month === $now_month) {

            if ($now_day < $birth_day) {
                $age--;
            }
        } elseif ($now_month < $birth_month) {
            $age--;
        }

        return $age;
    }
}
