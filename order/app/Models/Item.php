<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'items';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'products_id',
        'name',
        'unit',
        'price',
    ];

    public function quantity()
    {
        return $this->hasMany(Quantity::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
