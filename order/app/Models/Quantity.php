<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'quantities';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'orders_id',
        'items_id',
        'quantity',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
