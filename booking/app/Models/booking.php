<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'bookings';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'date',
        'time_id',
        'guest_id',
        'plan_id',
        'person',
        'note',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

    /**
     * Fullcalendar
     *
     */
    public function getAllFullcalendar()
    {

        // $bookingList = array(
        //     [
        //         'title' => '美容院',
        //         'description' => '人気の美容室予約取れた',
        //         'start' => '2022-10-10',
        //         'end'   => '2022-10-10',
        //     ],
        //     [
        //         'title' => 'シルバーウィーク旅行',
        //         'description' => '人気の旅館の予約が取れた',
        //         'start' => '2022-10-20 10:00:00',
        //         'end'   => '2022-10-22 18:00:00',
        //         'url'   => 'https://admin.juno-blog.site',
        //     ],
        //     [
        //         'title' => '給料日',
        //         'start' => '2022-10-30',
        //         'color' => '#ff44cc',
        //     ]
        // );

        $bookings = $this->get();
        $bookingList = [];
        foreach( $bookings as $key=>$item ){
            $bookingList[$key]['title'] = $item->guest->name." (".$item->person.")";
            $bookingList[$key]['start'] = $item->date;
            $bookingList[$key]['url'] = '/admin/booking/show'.$item->id;
        }

        return $bookingList;
    }


}
