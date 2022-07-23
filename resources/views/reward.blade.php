@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-8" style="background-color: #2d3748; margin: 50px;padding: 20px;border-radius: 10px">
            <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                <h>هدیه</h>
            </div>
            <form name="oilChange" action="/admin/addReward" method="post">
                @csrf
                @include('layout.msg')
                @include('layout.queryMsg')
                @include('layout.errorValidation')
                <div class="col-12" style="justify-content: center;display: flex;text-align: center;background: linear-gradient(#ffffff, #848484);padding: 15px;border-radius: 10px;filter: drop-shadow(0px 0px 16px rgb(220,220,220)); ">
                    <div class="col-3">
                        <a style="color: #0f0f0f;padding: 10px">امتیاز باقی مانده: {{$remainingScore}}</a>
                    </div>
                    <div class="col-3">
                        <a style="color: #0f0f0f;padding: 10px">شماره موبایل: {{$customer[0]->phoneNumber}}</a>
                    </div>
                    @if($customer[0]->meliCode)
                        <div class="col-3">
                            <a style="color: #0f0f0f;padding: 10px">کد ملی:  {{$customer[0]->meliCode}}</a>
                        </div>
                    @endif
                    <div class="col-3">
                        <a style="color: #0f0f0f;padding: 10px">نام و نام خانوادگی: {{$customer[0]->name.' '.$customer[0]->family}}</a>
                    </div>
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="id" value="{{$customer[0]->id}}" type="text" style="display:none;text-align: center;visibility: hidden">
                </div>
                <div class="col-12" style="display: flex;justify-content: center">
                    <input class="input" name="rewardTitle" placeholder="عنوان هدیه" type="text"
                           style="text-align: center;margin: 20px 0px 20px 0px">
                </div>
                <div class="col-12" style="display: flex;justify-content: center">
                    <input class="input" name="payScore" placeholder="امتیاز کسر شده" type="text"
                           style="text-align: center;margin: 20px 0px 20px 0px">
                </div>
                <div class="col-12" style="display: flex;justify-content: center">
                    <input class="input" name="dateRewardPay" placeholder="تاریخ دریافت هدیه" type="text"
                           style="text-align: center;margin: 20px 0px 20px 0px" value="{{$toDay}}">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                    <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                           value="هدیه دادن">
                </div>
            </form>
        </div>
    </div>
@endsection
