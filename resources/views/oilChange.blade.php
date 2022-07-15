@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-8" style="background-color: #2d3748; margin: 50px;padding: 20px;border-radius: 10px">
            <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                <h>تمدید روغن مشتری</h>
            </div>
            <form name="oilChange" action="/admin/oilChangeUpdate/1" method="post">
                @csrf
                @include('layout.msg')
                @include('layout.queryMsg')
                @include('layout.errorValidation')
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="meliCode" placeholder="کد ملی مشتری" type="text" style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="oilName" placeholder="نام روغن" type="text" style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="liter" placeholder="لیتر" type="text" style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="dateChangeOil" placeholder="تاریخ تعویض روغن" type="text" style="text-align: center" value="{{$toDay}}" >
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="expirationDay" placeholder="تاریخ انقضا روغن (به روز)" type="text" style="text-align: center" >
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="serviceMan" placeholder="نام سرویس کار" type="text"
                           style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="kilometerCurrent" placeholder="شماره کیلومتر" type="text"
                           style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 10px 0px 10px 0px">
                    <input class="input" name="kilometerProposed" placeholder="کارکرد پیشنهادی" type="text"
                           style="text-align: center">
                </div>

                <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                    <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                           value="تمدید">
                </div>
            </form>
        </div>
    </div>
@endsection
