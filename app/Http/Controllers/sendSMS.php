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
            echo 'dif=' . $diffCount . '/customer ex=' . $customer->expirationDay . ' ';
            if (($diffCount - 5 == $customer->expirationDay || $diffCount - 3 == $customer->expirationDay || $diffCount - 1 == $customer->expirationDay) && $customer->smsSent != 1) {
                $message = "جناب آقای " . $customer->name . ' ' . $customer->family . ' لطفا نسبت به تعویض روغن خود اقدام نمایید. مجتمع تعویض روغنی آسمان';
                echo $message;
                sendSMS($customer->phoneNumber, $message);
                updateSmsSent($customer->id);
            }
        }

    }
}
