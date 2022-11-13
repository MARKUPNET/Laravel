<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noshi extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'noshis';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'status',
        'type',
        'color',
        'position',
        'name',
        'note',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
