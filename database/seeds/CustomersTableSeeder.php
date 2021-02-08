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
            'gender' => '男',
            'birth' => '1978-06-23',
            'tel' => '0477236979',
            'address' => '千葉県銚子市春日町3-9-15春日町シティ403',
            'mail' => 'yoshiyuki0678@zyhdf.fjclu.qy',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '大竹優香',
            'ruby' => 'オオタケユウカ',
            'gender' => '女',
            'birth' => '1976-09-17',
            'tel' => '0475542994',
            'address' => '千葉県夷隅郡大多喜町上原西部田柳原入会4-14-16',
            'mail' => 'yuuka10794@ijtyzv.rv',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '沼田一子',
            'ruby' => 'ヌマタイチコ',
            'gender' => '女',
            'birth' => '1978-06-23',
            'tel' => '0474416855',
            'address' => '千葉県香取市大倉3-17-10',
            'mail' => 'Ichiko_Numata@fbkai.lgm',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '冨田碧依',
            'ruby' => 'トミタアオイ',
            'gender' => '女',
            'birth' => '1931-10-07',
            'tel' => '0493198070',
            'address' => '千葉県山武郡横芝光町長山台4-15-11',
            'mail' => 'ycfzzwsrxluyrhaoi3224@eqgt.zsb',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '村瀬博嗣',
            'ruby' => 'ムラセヒロツグ',
            'gender' => '男',
            'birth' => '1954-10-31',
            'tel' => '044724735',
            'address' => '千葉県山武郡九十九里町宿4-10-15',
            'mail' => 'hirotsugu58394@eqzdeewqs.zj.mds',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '斎藤美貴',
            'ruby' => 'サイトウミキ',
            'gender' => '女',
            'birth' => '1931-10-18',
            'tel' => '0476564253',
            'address' => '千葉県千葉市緑区平川町1-12',
            'mail' => 'miki5940@wczottpsnh.ls',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '稲田栄治',
            'ruby' => 'イナダエイジ',
            'gender' => '男',
            'birth' => '1931-10-07',
            'tel' => '0481695651',
            'address' => '千葉県印西市西の原2-18-15',
            'mail' => 'eijiinada@gkbglyiclt.dtd',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '豊田佳那子',
            'ruby' => 'トヨダカナコ',
            'gender' => '女',
            'birth' => '1990-03-27',
            'tel' => '0470207382',
            'address' => '千葉県印西市戸神台1-6-12',
            'mail' => 'aoamcecvhekanako9912@swleg.pga.gf',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '冨田碧依',
            'ruby' => 'トミタアオイ',
            'gender' => '女',
            'birth' => '1931-10-07',
            'tel' => '0493198070',
            'address' => '千葉県山武郡横芝光町長山台4-15-11',
            'mail' => 'ycfzzwsrxluyrhaoi3224@eqgt.zsb',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '大谷志乃',
            'ruby' => 'オオヤシノ',
            'gender' => '女',
            'birth' => '1971-09-20',
            'tel' => '0429154607',
            'address' => '千葉県千葉市稲毛区黒砂1-15-16',
            'mail' => 'uuhqwnltzrkshino0760@vfsrd.uyb',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '岡部雅哉',
            'ruby' => 'オカベマサヤ',
            'gender' => '男',
            'birth' => '1939-05-15',
            'tel' => '0492176600',
            'address' => '千葉県我孫子市中里新田3-13-5',
            'mail' => 'ry=nbpmpccrehsgmasaya9547@qipj.pb',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '橋本香音',
            'ruby' => 'ハシモトカノン',
            'gender' => '女',
            'birth' => '1939-05-29',
            'tel' => '0470583583',
            'address' => '千葉県君津市大井4-17-20',
            'mail' => 'Kanon_Hashimoto@flgc.hx',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '森谷彩葉',
            'ruby' => 'モリヤイロハ',
            'gender' => '女',
            'birth' => '1974-02-03',
            'tel' => '0480329028',
            'address' => '千葉県長生郡長柄町六地蔵3-8-3',
            'mail' => 'irohamoriya@rhvur.zg.mo',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '浜本清一郎',
            'ruby' => 'ハマモトセイイチロウ',
            'gender' => '男',
            'birth' => '1955-11-12',
            'tel' => '048330196',
            'address' => '千葉県印西市笠神2-15-13',
            'mail' => 'uhamamoto@csppmcayy.ix',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '梅津英樹',
            'ruby' => 'ウメヅヒデキ',
            'gender' => '男',
            'birth' => '1955-11-28',
            'tel' => '0439200317',
            'address' => '千葉県八千代市八千代台南3-13-10',
            'mail' => '	hideki85951@bccahy.ys',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '木田静子',
            'ruby' => 'キダシズコ',
            'gender' => '女',
            'birth' => '1976-09-09',
            'tel' => '0451153813',
            'address' => '千葉県千葉市中央区都町2-17-20',
            'mail' => 'shizuko65921@dujsuqjq.gxw',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '玉田泰介',
            'ruby' => 'タマダタイスケ',
            'gender' => '男',
            'birth' => '2000-04-03',
            'tel' => '0454834579',
            'address' => '千葉県銚子市余山町2-9',
            'mail' => 'Taisuke_Tamada@bpdeka.nxvhi.pdc',
            'job' => '学生',
            'company' => ''
        ]);
        $customer->save();

        // ２０件

        $customer = new Customer([
            'name' => '赤井亜依',
            'ruby' => 'アカイアイ',
            'gender' => '女',
            'birth' => '1999-08-30',
            'tel' => '047876795',
            'address' => '千葉県船橋市海神町東2-6',
            'mail' => 'ai6963@boeuwjmnaz.zl',
            'job' => '学生',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '倉橋和徳',
            'ruby' => 'クラハシカズノリ',
            'gender' => '男',
            'birth' => '2000-04-03',
            'tel' => '0487030652',
            'address' => '千葉県八街市文違3-10-17',
            'mail' => 'Kazunori_Kurahashi@zthbqqk.fmm.cv',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '三木瑠奈',
            'ruby' => 'ミキルナ',
            'gender' => '女',
            'birth' => '1970-02-19',
            'tel' => '0400420135',
            'address' => '千葉県いすみ市小池3-15-14',
            'mail' => 'runa962@dmcxfq.coo',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '山元純子',
            'ruby' => 'ヤマモトジュンコ',
            'gender' => '女',
            'birth' => '1993-05-20',
            'tel' => '0473464563',
            'address' => '千葉県鎌ケ谷市道野辺中央3-2-15',
            'mail' => '	junko908@pfppuwqm.oj',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '松岡修三',
            'ruby' => 'マツオカシュウゾウ',
            'gender' => '男',
            'birth' => '1969-12-31',
            'tel' => '0410806239',
            'address' => '千葉県習志野市津田沼2-13-10',
            'mail' => 'shuuzoumatsuoka@tqsur.eqewx.izz',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '中西麻奈',
            'ruby' => 'ナカニシマナ',
            'gender' => '女',
            'birth' => '1960-09-24',
            'tel' => '0430262857',
            'address' => '千葉県千葉市中央区栄町1-7-5',
            'mail' => 'mana_nakanishi@lcdbraj.nczz.der',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '玉田泰介',
            'ruby' => 'タマダタイスケ',
            'gender' => '男',
            'birth' => '2000-04-03',
            'tel' => '0454834579',
            'address' => '千葉県銚子市余山町2-9',
            'mail' => 'Taisuke_Tamada@bpdeka.nxvhi.pdc',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '川瀬依子',
            'ruby' => 'カワセヨリコ',
            'gender' => '女',
            'birth' => '1968-08-24',
            'tel' => '0451939464',
            'address' => '千葉県佐倉市上代1-4-14',
            'mail' => 'Yoriko_Kawase@zhuzvtps.bqy',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '井本優芽',
            'ruby' => 'イモトユメ',
            'gender' => '女',
            'birth' => '1969-09-10',
            'tel' => '0415864214',
            'address' => '千葉県長生郡長生村曽根2-10-11',
            'mail' => 'yume685@nzwhyyt.fy',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '米倉秀夫',
            'ruby' => 'ヨネクラヒデオ',
            'gender' => '男',
            'birth' => '1968-06-23',
            'tel' => '0476069000',
            'address' => '千葉県市川市原木2-7-13',
            'mail' => 'hideo_yonekura@vmipw.dzz',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '小沢晃年',
            'ruby' => 'オザワアキトシ',
            'gender' => '男',
            'birth' => '1940-02-06',
            'tel' => '0405803397',
            'address' => '千葉県茂原市大芝3-4',
            'mail' => '	Akitoshi_Ozawa@qxfrcmdku.yas',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '谷内沙也佳',
            'ruby' => 'タニウチサヤカ',
            'gender' => '女	',
            'birth' => '1953-11-02',
            'tel' => '0466325143',
            'address' => '千葉県柏市光ケ丘1-17',
            'mail' => 'ataniuchi@qicfs.fkhnl.mg',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '福沢麻里子',
            'ruby' => 'フクザワマリコ',
            'gender' => '女	',
            'birth' => '1975-04-30',
            'tel' => '0466325143',
            'address' => '千葉県鎌ケ谷市軽井沢4-18-10',
            'mail' => 'ataniuchi@qicfs.fkhnl.mg',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '井沢あやめ',
            'ruby' => 'イザワアヤメ',
            'gender' => '女',
            'birth' => '1998-03-27',
            'tel' => '0499381851',
            'address' => '千葉県銚子市四日市場町1-16-9',
            'mail' => 'eizawa@tgdvyoi.af',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '山村真由子',
            'ruby' => 'ヤマムラマユコ',
            'gender' => '女',
            'birth' => '1991-08-26',
            'tel' => '0470490843',
            'address' => '千葉県旭市駒込3-14',
            'mail' => 'mayukoyamamura@ojndvibfy.blj',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '宮脇小春',
            'ruby' => 'ミヤワキコハル',
            'gender' => '女',
            'birth' => '1984-07-17',
            'tel' => '0416113504',
            'address' => '千葉県香取市与倉4-10-16',
            'mail' => 'koharumiyawaki@eodmieoy.jqo',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '大滝眞',
            'ruby' => 'オオタキマコト',
            'gender' => '男',
            'birth' => '1972-08-10',
            'tel' => '0481313022',
            'address' => '千葉県流山市思井1-17',
            'mail' => '	makoto16946@dpsol.la.rf',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '工藤一太郎',
            'ruby' => 'クドウイチタロウ',
            'gender' => '男',
            'birth' => '1943-10-12',
            'tel' => '0464852801',
            'address' => '千葉県印西市川向1-13-6',
            'mail' => 'ichitarou65229@xgtdvwqb.ybx',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '神谷章治郎',
            'ruby' => 'カミヤショウジロウ',
            'gender' => '男',
            'birth' => '1995-02-12',
            'tel' => '0480515567',
            'address' => '千葉県夷隅郡大多喜町黒原4-19-7',
            'mail' => 'kuhsqeuzshoujirou5441@zlkx.fnrma.dzn',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        $customer = new Customer([
            'name' => '臼井尚',
            'ruby' => 'ウスイタカシ',
            'gender' => '男',
            'birth' => '1985-08-17',
            'tel' => '0476456162',
            'address' => '千葉県南房総市池之内1-17',
            'mail' => 'iusui@htiedxlow.hg.xn',
            'job' => '会社員',
            'company' => ''
        ]);
        $customer->save();

        // ４０件

    }
}
