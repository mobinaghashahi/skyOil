<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class sendSMS extends Controller
{
    function dailyCheck()
    {
        $customers = Customer::all();
        foreach ($customers as $customer) {
            echo "<br>";
            $diffCount = diffDaysOfNow(dataConvert($customer->dateChangeOil));
            echo 'rozhaye gozashte=' . $diffCount . ' |customer ex=' . $customer->expirationDay . ' |smsSent'.$customer->smsSent;
            if ($customer->expirationDay - 5 <= $diffCount && $customer->smsSent != 1) {
                $message = "جناب آقای " . $customer->name . ' ' . $customer->family . ' لطفا نسبت به تعویض روغن خود اقدام نمایید. مجتمع تعویض روغنی آسمان';
                echo $message;
                sendSMS($customer->phoneNumber, $message);
                updateSmsSent($customer->id);
            }
        }

    }
}
