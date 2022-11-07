<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'orders';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'serialnumber',
        'products_id',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function noshi()
    {
        return $this->belongsTo(Noshi::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function quantity()
    {
        return $this->belongsTo(Quantity::class);
    }
}
