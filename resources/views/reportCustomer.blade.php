<?php
date_default_timezone_set('Iran');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title></title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="printFactor">
    <div style="text-align: right;padding-top: 0.5cm;direction: rtl" class="col-4">
        <a style="direction: rtl"> تاریخ: {{$customerBuy[count($customerBuy)-1]->dateChangeOil }}</a>
        <p>شماره: {{$customerBuy[count($customerBuy)-1]->id}}</p>
        <p>ساعت: {{date("H:i:s")}}</p>
    </div>
    <div class="col-4" style="text-align: center;padding-top: 0.5cm">
        <a style="text-align: center">فاکتور فروش</a>
    </div>
    <div class="col-4" style="padding-top: 0.5cm">
        <a>مجتمع فنی و تخصصی سرویس روغن آسمان</a>
    </div>

    <div class="col-12" style="float: right">
        <div class="col-6" style="padding-top: 0.5cm;text-align: right;direction: rtl;float: right">
            <a style="padding-right: 10px">نام و نام خانوادگی:  {{$customer[0]->name.' '.$customer[0]->family}}</a>
        </div>
    </div>
    <div class="col-12">
        <div class="col-4" style="padding-top: 0.5cm;text-align: right;direction: rtl">
            <a>شماره همراه: {{$customer[0]->phoneNumber}}</a>
        </div>
        <div class="col-4" style="padding-top: 0.5cm;text-align: right;direction: rtl">
            <a>شماره پلاک: {{$customer[0]->carTag}}</a>
        </div>
        <div class="col-4" style="padding-top: 0.5cm;text-align: right;direction: rtl">
            <a style="padding-right: 10px">نام خودرو: {{$customer[0]->carType}}</a>
        </div>
    </div>


    <div class="col-12"
         style="padding-top: 1cm;float: right;text-align: right;direction: rtl;justify-content: center;display: flex">
        <table style="border-collapse: collapse;width: 95%;text-align: center">
            <tr>
                <th>
                    امتیاز اولیه
                </th>
                <th>
                    {{$customerBuy->sum('liter')-$customerBuy[count($customerBuy)-1]->liter}}
                </th>
                <th>
                    کلیومتر قبلی
                </th>
                <th>
                    {{$customer[0]->kilometerPrevious }}
                </th>
            </tr>
            <tr>
                <th>
                    امتیاز کسب شده
                </th>
                <th>
                    {{$customerBuy[count($customerBuy)-1]->liter}}
                </th>
                <th>
                    کلیومتر فعلی
                </th>
                <th>
                    {{$customer[0]->kilometerCurrent}}
                </th>
            </tr>
            <tr>
                <th>
                    امتیاز مصرف شده
                </th>
                <th>
                    {{$customerRewards->sum('scorePay')}}
                </th>
                <th>
                    کارکرد این دوره
                </th>
                <th>
                    {{$customer[0]->kilometerCurrent-$customer[0]->kilometerPrevious }}
                </th>
            </tr>
            <tr>
                <th>
                    مانده امتیازات
                </th>
                <th>
                    {{$customerBuy->sum('liter')-$customerRewards->sum('scorePay')}}
                </th>
                <th>
                    کارکرد پیشنهادی
                </th>
                <th>
                    {{$customer[0]->kilometerProposed}}
                </th>

            </tr>
        </table>
    </div>
    <div class="col-12" style="text-align: right; ">
        <p style="padding: 0.5cm 0.5cm 0cm 0cm">کیلومتر 5 محور اردستان- کاشان، بعد از پلیس راه، داخل مجتمع خدمات رفاهی
            آسمان اردستان</p>
    </div>
    <div class="col-12" style="text-align: right; ">
        <p style="padding: 0.5cm 0.5cm 0cm 0cm">تلفن: 09939146646</p>
    </div>

</div>
</body>
</html>
