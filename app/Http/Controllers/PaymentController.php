<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use Session;

class PaymentController extends Controller
{
    public function collectData(Request $req){
        return view('frontend.payment_page',['req'=>$req]);
    }

    public function payFonepaySu(){
        return view('frontend.paymentSuFonePay');
    }

    public function payFonepay(Request $req){
        // dd($req);
        $buy_date = date('Y-m-d H:i:s');
        $user_id =  $req->session()->get('userLoginId');
        $pmt_method = 'FonePay';
        $status = 'Inactive';
        // from form
        $amount = $req->input('totalAmount');
        $package_id = $req->input('packageId');

        $subpackage_id= implode(',', $req->input('subpackage'));
        // dd($subpackage_id);
        // $subpackage_id = $req->input('subpackage');

        $package = Invoice::create([
            'user_id' => $user_id,
            'package_id' => $package_id,
            'subpackage_id' => $subpackage_id,
            'amount' => $amount,
            'pmt_method' => $pmt_method,
            'buy_date' => $buy_date,
            'status' => $status
        ]);
        return redirect('/payFonepaySu');
        
    }
    public function payeSewapay(Request $req){
        // dd($req);
        $data = [
            'site_url'=>'http://127.0.0.1:8000/',
            'user_id' =>  $req->session()->get('userLoginId'),
            'buy_date' => date('Y-m-d H:i:s'),
            'pmt_method' => 'eSewa',
            'status' => 'Inactive',
            'amount' => $req->input('totalAmount1'),
            'package_id' => $req->input('packageId1'),
            'subpackage_id'=> implode(',', $req->input('subpackage1')),
        ];
        // dd($data);
        
        return view('frontend.esewa_checkout',['data'=>$data]);
        
    }
    // verify
    public function verify(Request $request)
    {
        $status = $request->q;
        // dd($status);
        $oid = $request->oid;
        $refId = $request->refId;
        $amt = $request->amt;
        // dump($oid, $refId, $amt);

        if ($status == 'su') {
            $url = "https://uat.esewa.com.np/epay/transrec";
            $data = [
                'amt' => $request->session()->get('esewa_amount'),
                'rid' => $refId,
                'pid' => $request->session()->get('esewa_token'),
                'scd' => 'EPAYTEST',
            ];

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);

            if (strpos($response, "Success") == true) {
                return redirect()->back()->with('success','Transaction Successful.');
            } else {
                return redirect()->back()->with('error','Transaction Failed Try Again.');
            }
        } else {
            $pmt_status = 0;
            return redirect()->back()->with('error','Transaction Failed Try Again.');
        }
    }
}
