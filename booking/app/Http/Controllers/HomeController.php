<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Guest;
use App\Models\Plan;
use App\Models\Time;
use Illuminate\Http\Request;

use Mail;
use App\Mail\BookingSendmail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->guest = new Guest;
        $this->plan = new Plan;
        $this->time = new Time;
    }


    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $times = Time::get();
        $plans = Plan::get();

        return view('/index', compact('times', 'plans'));
    }


    /**
     * Show the application confirm.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function confirm(Request $request)
    {
        $request->validate([
            'date'      => 'required',
            'time_id'   => 'required|integer',
            'plan_id'   => 'required|integer',
            'person'    => 'required|integer',
            'note'      => '',
            'guest'     => 'required',
            'phone'     => 'required',
            'email'     => 'required|email',
            'emailconf' => 'required|email',
        ]);

        $inputs = $request->all();
        $inputs['time_name'] = $this->time->getTimeNameById($inputs['time_id']);
        $inputs['plan_name'] = $this->plan->getPlanNameById($inputs['plan_id']);

        return view('/confirm', compact('inputs'));
    }


    /**
     * Show the application thanks.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function send(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');
        $inputs['time_name'] = $this->time->getTimeNameById($inputs['time_id']);
        $inputs['plan_name'] = $this->plan->getPlanNameById($inputs['plan_id']);

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('form.index')
                ->withInput($inputs);

        } else {
            //入力されたデータをデータベースに保存
            $this->dataSave($inputs);

            //入力されたメールアドレスにメールを送信
            Mail::send(new BookingSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('/thanks')
                ->with('success', '正常に送信されました。');
        }
    }

    /**
     * Show the application thanks.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dataSave($inputs)
    {
        $guest = new Guest;
        $guest->name       = $inputs['guest'];
        $guest->phone      = $inputs['phone'];
        $guest->email      = $inputs['email'];
        $guest->save();

        $booking = new Booking;
        $booking->guest_id  = $guest->id;
        $booking->date      = $inputs['date'];
        $booking->time_id   = $inputs['time_id'];
        $booking->plan_id   = $inputs['plan_id'];
        $booking->person    = $inputs['person'];
        $booking->note      = $inputs['note'];
        $booking->save();
    }
}
