<?php

use App\Models\Customer;

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
        'uname'=>'09139638917',
        'pass'=>'faraz1180076915',
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
