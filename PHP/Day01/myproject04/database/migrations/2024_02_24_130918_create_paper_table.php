<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     * 创建 数据表 的操作
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper', function (Blueprint $table) {
            // id              表的主键，自增
            $table->bigIncrements('id');
            // paper_name      试卷名称，唯一，varchar(100)，不为空
            $table->string('paper_name', '100')->notNull()->unique();
            // tatal_score     试卷总分，整型数字，tinyint，默认为 100
            $table->tinyInteger('tatal_score')->default(100);
            // start_time      试卷开始考试时间，时间戳类型（整型 int）
            $table->integer('start_time')->nullable();
            // duration        考试时间长度，单位分钟，整型 tinyint
            $table->tinyInteger('duration');
            // status          试卷是否启用的状态，1 表示 启用，2 表示 禁用，默认 为 1，tinyint 类型
            $table->tinyInteger('status')->default(1);

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 删除数据表，创建数据表的 撤销操作
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
