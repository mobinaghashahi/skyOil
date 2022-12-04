@extends('layout.master')

@section('content')
    <div class="col-12" style="display: flex;justify-content: center;margin: 50px 0px 50px 0px;">
        <div class="col-9" style="background-image: linear-gradient(#717c89,#2d3748);border-radius: 50px;padding: 20px">
            <div class="col-12 addCostumerFilds">
                <form name="addCustomer" action="@yield('actionPath')" method="post">
                    @csrf
                    <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                        @yield('title')
                    </div>
                    @include('layout.msg')
                    @include('layout.queryMsg')
                    @include('layout.errorValidation')
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="name" placeholder="نام" type="text" value="@yield('name')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="family" placeholder="نام خانوادگی" type="text" value="@yield('family')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="customerCode" placeholder="کد مشتری" type="text" value="@yield('customerCode')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carTag" placeholder="شماره پلاک" type="text" value="@yield('carTag')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="phoneNumber" placeholder="شماره موبایل" type="text" value="@yield('phoneNumber')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carType" placeholder="نوع ماشین" type="text" value="@yield('carType')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="oilName" placeholder="نام روغن" type="text" value="@yield('oilName')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="liter" placeholder="لیتر" type="text" value="@yield('liter')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input name="dateChangeOil" style="text-align: center" type="text"  id="exampleInput3" placeholder=" تاریخ تعویض روغن" data-placement="right"
                               data-englishnumber="true" value="@yield('dateChangeOil')" />
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="expirationDay" placeholder="تاریخ انقضا روغن (به روز)" type="text" value="@yield('expirationDay')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="serviceMan" placeholder="نام سرویس کار" type="text" value="@yield('serviceMan')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerCurrent" placeholder="شماره کیلومتر" type="text" value="@yield('kilometerCurrent')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerProposed" placeholder="کارکرد پیشنهادی" type="text" value="@yield('kilometerProposed')">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input type="checkbox" id="sendSms" name="sendSms" value="send">
                        <label for="vehicle1" style="text-align: center;padding: 1px;margin:4px;color: #ffc700;filter: drop-shadow(0px 0px 5px white)"> ارسال پیامک ثبت نام</label><br>
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                        <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                               value="@yield('submitName')">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
