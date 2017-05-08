<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 表名称
    protected $table = 'articles';


    protected $fillable = ['id', 'title', 'keyword', 'desc', 'content', 'user_id', 'cate_id', 'comment_count',
        'read_count','status','sort','html_content'
    ];
}
