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
        return $this->belongsTo(Product::class);
    }

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }

    public function noshi()
    {
        return $this->hasMany(Noshi::class);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }

    public function quantity()
    {
        return $this->hasMany(Quantity::class);
    }
}
