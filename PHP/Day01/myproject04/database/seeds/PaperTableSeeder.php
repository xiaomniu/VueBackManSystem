<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //定义数组
        $data = [
            [
                'paper_name'    => '文综',
                'start_time'    => strtotime('+7 days'),
                'duration'      => '120',
            ],
            [
                'paper_name'    => '理综',
                'start_time'    => strtotime('+3 days'),
                'duration'      => '120',
            ],
            [
                'paper_name'    => '英语',
                'start_time'    => strtotime('+5 days'),
                'duration'      => '120',
            ],
        ];

        // 写入数据
        DB::table('paper') -> insert($data);
    }
}
