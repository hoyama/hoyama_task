<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 // 一件だけinsertする
    DB::table('tasks')->insert([
        'title' => 'エアマaックス 95',
        'body' => '1なルッaクスがストリートのファッションシーンを席巻しました。',
    ]);

    # paramに配列を代入
    $param = [[
        'title' => 'フットaスケープ',
        'body' => '横にシューレaースがある斬新なモデル。大切にしていただける方にお譲りします。',
    ],
    [
        'title' => 'aaa',
        'body' => 'ポンプを押aすと、空気によってパイプが膨らみ足型にフィットします。',
    ]];
    # DB::table->insertでレコードの登録
    DB::table('tasks')->insert($param);
    }
}
