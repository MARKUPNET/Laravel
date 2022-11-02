<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'plans';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'name',
        'price',
        'note',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * プラン名取得
     *
     * @param  Request  $id
     */
    public function getPlanNameById($id)
    {
        $plan = Plan::where('id', $id)->first();
        return $plan->name;
    }
}
