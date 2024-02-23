<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //定义 模型关联的数据表（一个模型 只操作  一个表)
    protected $table = 'member';
    //定义 主键（可选）
    protected $primaryKey = 'id';
    //定义 禁止操作 时间
    public $timestamps = false;
    //设置 允许写入的 数据字段
    protected $fillable = ['id', 'name', 'age', 'email'];
}
