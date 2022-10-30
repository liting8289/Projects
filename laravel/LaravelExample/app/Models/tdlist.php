<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tdlist extends Model
{
    use HasFactory;
    // 要操作的資料表
    protected $table ='tdlist';

    // 關閉timestamps(預設是開啟)
    public $timestamps =false;

    // 宣告可操作欄位(沒宣告的欄位不能用)
    protected $fillable =[
        'id','work','act'
    ];
}
