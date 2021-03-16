<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movies')->delete();
        
        \DB::table('movies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'にほん',
                'country_id' => 2,
                'public_year' => 98,
                'public_year_in_jp' => 1932,
                'supervisor' => 'ウェズリー・ラッグルス',
                'actor_1' => 'リチャード・ディックス',
                'actor_2' => 'アイリーン・ダン',
                'song_title' => 'ヤンシーの帰',
                'scene' => NULL,
                'synopsis' => '新天地を求めてオクラホマに移り住んだ一家の波乱万丈の歴史を描く大河ドラマ。',
                'url' => 'NOSTALGIC_MOVIES_01_08_1.mp4',
                'del_flg' => 0,
                'created_at' => '2020-04-16 01:46:54',
                'updated_at' => '2020-07-08 06:33:57',
                'title_kana' => 'にほん',
                'category_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '大阪',
                'country_id' => 2,
                'public_year' => 98,
                'public_year_in_jp' => 1932,
                'supervisor' => 'Ｗ・Ｓ・ヴァン・ダイク二世',
                'actor_1' => 'ジョニー・ワイズミュラー',
                'actor_2' => 'モーリン・オサリバン',
                'song_title' => '大猿との対決',
                'scene' => NULL,
                'synopsis' => 'ターザン映画の本格的トーキー第1作。象牙を求めてムチアの絶壁を超えた英人ハンター2人と娘ジェーンの冒険譚。',
                'url' => 'NOSTALGIC_MOVIES_01_13_1.mp4',
                'del_flg' => 0,
                'created_at' => '2020-04-16 01:46:54',
                'updated_at' => '2020-04-16 01:46:54',
                'title_kana' => NULL,
                'category_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '東京',
                'country_id' => 2,
                'public_year' => 98,
                'public_year_in_jp' => 1932,
                'supervisor' => 'ジョージ・フィッツモーリス',
                'actor_1' => 'グレタ・ガルボ',
                'actor_2' => 'ラモン・ノヴァロ',
                'song_title' => 'オリエンタル・ダンス',
                'scene' => NULL,
                'synopsis' => '第一次大戦下のパリを舞台に、ダンサーでありドイツの女スパイでもあるマタ・ハリの禁断の恋を描く。',
                'url' => 'NOSTALGIC_MOVIES_05_04_1.mp4',
                'del_flg' => 0,
                'created_at' => '2020-04-16 01:46:54',
                'updated_at' => '2020-04-16 01:46:54',
                'title_kana' => NULL,
                'category_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'ハノイ',
                'country_id' => 2,
                'public_year' => 97,
                'public_year_in_jp' => 1933,
                'supervisor' => 'エドマンド・グールディング',
                'actor_1' => 'グレタ・ガルボ',
                'actor_2' => 'ジョン・バリモア',
                'song_title' => '独りになりたいの',
                'scene' => NULL,
                'synopsis' => 'ベルリンのグランド・ホテルを舞台に5人の男女の1日半の人間模様を描いた古典的名作。',
                'url' => 'NOSTALGIC_MOVIES_04_11_1.mp4',
                'del_flg' => 0,
                'created_at' => '2020-04-17 01:56:49',
                'updated_at' => '2020-04-17 01:56:49',
                'title_kana' => NULL,
                'category_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '福岡',
                'country_id' => 2,
                'public_year' => 95,
                'public_year_in_jp' => 1935,
                'supervisor' => 'ジェームズ・ホエール',
                'actor_1' => 'ボリス・カーロフ',
                'actor_2' => 'コリン・クライヴ',
                'song_title' => '俺が嫌いなんだな',
                'scene' => NULL,
                'synopsis' => '死んだはずのモンスターは地下水道で生きていた。そしてついにモンスターの花嫁が誕生するが、結婚は成就するのか。',
                'url' => 'NOSTALGIC_MOVIES_03_10_1.mp4',
                'del_flg' => 0,
                'created_at' => '2020-04-17 01:59:40',
                'updated_at' => '2020-04-17 01:59:40',
                'title_kana' => NULL,
                'category_id' => 1,
            ),
        ));
        
        
    }
}