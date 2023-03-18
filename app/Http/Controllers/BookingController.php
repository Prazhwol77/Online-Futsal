<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Futsal;
use Illuminate\Support\Facades\DB;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth=auth()->user()->id;
    $data=DB::table('bookings')->join('futsals','futsals.id','=','bookings.futsal_id')->join('users','users.id','=','bookings.user_id')->where('bookings.user_id',$auth)->get();
    return view('userdashboard',['post'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }


    public function checkout( Request $request)
    {
        //if pid is set from the request
        if( isset( $request->pid) )
        {
            //get id from auth user
            $user_id=auth()->user()->id;
            $course =  Futsal::where('id', $request->pid)->first();
            $order = new Booking;
            $order->futsal_id = $course->id;
            $order->InvoiceNo = $course->id . time();
            $order->total = $course->price;
            $order->user_id=$user_id;
            $order->save();
            /*
            $course_order=new Course_order;
            $course_order->order_id=$order->id;
            $course_order->course_id=$course->id;
            $course_order->save();*/
            //fonepay integration

            $fonepay =[];
            $fonepay['RU'] = route('fonepay.return');
            $fonepay['PID'] = 'NBQM';
            $fonepay['PRN'] = $order->invoice_no;
            $fonepay['AMT'] = $order->total;
            $fonepay['CRN'] = 'NPR';
            $fonepay['DT'] = date('m/d/Y');
            $fonepay['R1'] = 'test';
            $fonepay['R2'] = 'letslearntogether';
            $fonepay['MD'] = 'P';

            $data = $fonepay['PID'] .','.
                $fonepay['MD'] .','.
                $fonepay['PRN'] .','.
                $fonepay['AMT'] .','.
                $fonepay['CRN'] .','.
                $fonepay['DT'] .','.
                $fonepay['R1'] .','.
                $fonepay['R2'] .',' .         
                $fonepay['RU'];

            $fonepay['DV'] = hash_hmac('sha512', $data, 'a7e3512f5032480a83137793cb2021dc');
           //return to view with additional information
            return view('booking', compact('course', 'order', 'fonepay'));
        }
    }
}
