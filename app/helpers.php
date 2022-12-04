<?php

use App\Models\Customer;
use App\Models\oilBuy;
use App\Models\reward;

function dateExplode($date){
    $explodeDate = explode('/', $date);
    return $explodeDate;
}
function dataConvert($date)
{
    $explodeDate=dateExplode($date);
    $temp = verta();
    $temp->day = $explodeDate[2];
    $temp->month = $explodeDate[1];
    $temp->year = $explodeDate[0];
    return $temp;
}

function diffDaysOfNow($date)
{
    $dateNow=verta();
    return $date->diffDays($dateNow);
}

function sendSMS($number,$message){
    $url = "https://ippanel.com/services.jspd";

    $rcpt_nm = array($number);
    $param = array
    (
        'uname'=>'username',
        'pass'=>'password',
        'from'=>'+983000505',
        'message'=>$message,
        'to'=>json_encode($rcpt_nm),
        'op'=>'send'
    );

    $handler = curl_init($url);
    curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
    $response2 = curl_exec($handler);

    $response2 = json_decode($response2);
    $res_code = $response2[0];
    $res_data = $response2[1];


    echo $res_data;
}

function updateSmsSent($id){
    $customer=Customer::find($id);
    $customer->smsSent=1;
    $customer->update();
}

function scoreChecker(){

}
function sumScore($customerId){
    $historyChangeOil=oilBuy::where('custumer_id',$customerId)->get();

    $allScore=0;
    foreach ($historyChangeOil as $oilChange)
    {
        $allScore+= $oilChange->liter;
    }
    return $allScore;
}

function sumScorePay($customerId){
    $historyScorePay=reward::where('custumer_id',$customerId)->get();
    $allScorePay=0;
    foreach ($historyScorePay as $scorePay)
    {
        $allScorePay+= $scorePay->scorePay;
    }
    return $allScorePay;
}

function sendSmsWelcome($number,$name,$family,$score){
    $message='جناب آقای '.$name.' '.$family .' راننده عزیز و گرامی
از اینکه ما را انتخاب کردید سپاسگزاریم
حضور شما انگیزه ما برای بهتر انجام دادن است!
مفتخریم که همیشه شما را بعنوان مشتری گرانقدر خود داشته باشیم.
امتیاز فعلی شما: '.$score;
    sendSMS($number,$message);
}
