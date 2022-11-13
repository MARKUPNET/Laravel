<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'deliveries';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'orders_id',
        'status',
        'name',
        'kana',
        'phone',
        'zip',
        'pref',
        'addr',
        'addr2',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
