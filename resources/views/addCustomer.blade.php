@extends('layout.master')

@section('content')
    <div class="col-12" style="display: flex;justify-content: center;margin: 50px 0px 50px 0px;">
        <div class="col-9" style="background-image: linear-gradient(#717c89,#2d3748);border-radius: 50px;padding: 20px">
            <div class="col-12 addCostumerFilds">
                <form name="addCustomer" action="/admin/addCustomer" method="post">
                    @csrf
                    <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                        <h>افزودن مشتری جدید</h>
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center">
                        @if (\Session::has('msg'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('msg') !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if ($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="col-12">
                                    <p style="color: #950202;text-align: center;line-height: 15px">{{$error}}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="name" placeholder="نام" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="family" placeholder="نام خانوادگی" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="meliCode" placeholder="کد ملی" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carTag" placeholder="شماره پلاک" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="phoneNumber" placeholder="شماره موبایل" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carType" placeholder="نوع ماشین" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="oilName" placeholder="نام روغن" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="liter" placeholder="لیتر" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input name="dateChangeOil" style="text-align: center" type="text"  id="exampleInput3" placeholder=" تاریخ تعویض روغن" data-placement="right"
                               data-englishnumber="true" value="{{$toDay}}" />
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="expirationDay" placeholder="تاریخ انقضا روغن (به روز)" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="serviceMan" placeholder="نام سرویس کار" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerCurrent" placeholder="شماره کیلومتر" type="text">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerProposed" placeholder="کارکرد پیشنهادی" type="text">
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                        <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                               value="افزودن">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
