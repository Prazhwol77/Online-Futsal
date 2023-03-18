<?php
// a class of elements in which each element has a different name to that associated class
namespace App\Http\Controllers;
//use required model,packages and classes
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use App\Models\course;
//esewacontroller that extends controller
class EsewaController extends Controller
{
    //function that take request from the form
    public function success(Request $request)
    { 
        //if oid ,amt,redid is set or passed 
        if( isset($request->oid) && isset($request->amt) && isset($request->refId))
        {   
            //invoice_no must be unique
            $order = Booking::where('InvoiceNo', $request->oid)->first();
            //dd($order);
            //if order has some value
            if( $order)
            {
                //it will redirect to esewa transraction page
                //self::check();
                $url = "https://uat.esewa.com.np/epay/transrec";
                //store the data into db
                $data =[
                    'amt'=> $order->Total,
                    'rid'=> $request->refId,
                    'pid'=> $order->InvoiceNo,
                    'scd'=> 'epay_payment'
                ];
                //these function provided by esewa
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                //dd($response);
                //curl_close
                curl_close($curl);
                //checking the response
                $response_code = $this->get_xml_node_value('response_code',$response );
                //dd($response_code);
                //when thr response is success
                if( trim($response_code) == 'Success')
                {
                    //order status is set to 1
                    $order->Order_status = 1;
                    $order->save();
                    //rediect to success page
                    return redirect('payment/response')->with('success_message', 'Payment successful');
                }
            }   

            
        }

    }
     //when the functin fail
     public function fail(Request $request)
     {
         //it will rediect to payment.error page
        return redirect()->route('payment.error')->with('error_message', ' You have cancelled your transaction .');
     }
    //get_Xml_node_value with some parameter
    public function get_xml_node_value($node, $xml) {
        //if data xml is false
        if ($xml == false) {
            return false;
        }
        //preg_match 
        $found = preg_match('#<'.$node.'(?:\s+[^>]+)?>(.*?)'.
                '</'.$node.'>#s', $xml, $matches);
        if ($found != false) {
            
                return $matches[1]; 
             
        }     
    //else return false
    return false;
    }
    //it view the payment response
    public function payment_response()
    {
        return view('paymentsucess');
    }
    //payment error then this function will run
    public function payment_error(){
        return view('paymenterror');
    }
  /*  public function check(){
        $user=auth()->user()->id;
        $course=DB::table('courses')
                      ->join('orders', 'courses.id', '=', 'orders.course_id')
                      ->where('orders.user_id','=',$user)
                     ->update(array('status' => 'paid')); 
    }*/

}
