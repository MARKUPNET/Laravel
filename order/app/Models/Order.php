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
        'noshis_id',
        'deliveries_id',
        'guests_id',
        'pricesum',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function guests()
    {
        return $this->belongsTo(Guest::class);
    }

    public function noshis()
    {
        return $this->belongsTo(Noshi::class);
    }

    public function deliveries()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function quantities()
    {
        return $this->hasMany(Quantity::class);
    }
}
