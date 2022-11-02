<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'times';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'timeslot',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * 時間取得
     *
     * @param  Request  $id
     */
    public function getTimeNameById($id)
    {
        $time = Time::where('id', $id)->first();
        return $time->timeslot;
    }
}
