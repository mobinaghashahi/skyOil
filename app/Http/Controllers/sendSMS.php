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
            echo $diffCount . " ";
            if ($diffCount == $customer->expirationDay - 5 || $diffCount == $customer->expirationDay - 3 || $diffCount == $customer->expirationDay - 1) {
                $message = "جناب آقای " . $customer->name . ' ' . $customer->family . ' لطفا نسبت به تعویض روغن خود اقدام نمایید. مجتمع تعویض روغنی آسمان';
                echo $message;
                sendSMS($customer->phoneNumber,$message);
                echo 'message sent';
                echo $customer->name;
                echo $customer->phoneNumber;
            }
        }

    }
}
