<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 表名称
    protected $table = 'categorys';

    // 批量添加
    protected $fillable = ['id', 'parent_id', 'lft', 'rgt', 'depth', 'name', 'created_at', 'updated_at'];


}
