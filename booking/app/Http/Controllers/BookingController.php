<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\guest;
use App\Models\plan;
use App\Models\time;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->guest = new Guest;
        $this->plan = new Plan;
        $this->time = new Time;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('id', 'desc')->paginate(5);

        return view('/admin/booking/index', compact('bookings'))
            ->with('page_id', request()->page_id)
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guests = Guest::get();
        $plans  = Plan::get();
        $times  = Time::get();

        return view('/admin/booking/create', compact('guests', 'plans', 'times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        ]);

        $guest = new Guest;
        $guest->name       = $request->guest;
        $guest->phone      = $request->phone;
        $guest->email      = $request->email;
        $guest->save();

        $booking = new Booking;
        $booking->guest_id  = $guest->id;
        $booking->date      = $request->date;
        $booking->time_id   = $request->time_id;
        $booking->plan_id   = $request->plan_id;
        $booking->person    = $request->person;
        $booking->note      = $request->note;
        $booking->save();

        return redirect()->route('booking.index')
            ->with('success', $guest->name.'様の予約を登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        $guests = Guest::get();
        $plans  = Plan::get();
        $times  = Time::get();

        return view('/admin/booking/show', compact('booking', 'guests', 'plans', 'times'))
            ->with('page_id', request()->page_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        $guests = Guest::get();
        $plans  = Plan::get();
        $times  = Time::get();

        return view('/admin/booking/edit', compact('booking', 'guests', 'plans', 'times'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking, guest $guest)
    {

        $guest = Guest::find($booking->guest_id);
        $guest->name       = $request->guest;
        $guest->phone      = $request->phone;
        $guest->email      = $request->email;
        $guest->save();

        $booking->guest_id  = $booking->guest_id;
        $booking->date      = $request->date;
        $booking->time_id   = $request->time_id;
        $booking->plan_id   = $request->plan_id;
        $booking->person    = $request->person;
        $booking->note      = $request->note;
        $booking->save();

        return redirect()->route('booking.index')
            ->with('success', $booking->name.'様の予約を編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')
            ->with('success', $booking->name.'様の予約を削除しました。');
    }
}
