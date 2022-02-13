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
                        <input class="input" name="name" placeholder="نام" type="text" style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="family" placeholder="نام خانوادگی" type="text"
                               style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="meliCode" placeholder="کد ملی" type="text"
                               style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carTag" placeholder="شماره پلاک" type="text"
                               style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="phoneNumber" placeholder="شماره موبایل" type="text"
                               style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carType" placeholder="نوع ماشین" type="text"
                               style="text-align: center">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input name="dateChangeOil" style="text-align: center" type="text"  id="exampleInput3" placeholder="تاریخ" data-placement="right"
                               data-englishnumber="true" />
                        <div data-mddatetimepicker="true" data-trigger="click"
                             data-targetselector="#exampleInput3" style="margin: 0px 0px 0px 5px">
                            <img src="/image/calender.png" width="20" height="20">
                        </div>
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="expirationDay" placeholder="تاریخ انقضا روغن (به روز)" type="text"
                               style="text-align: center">
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
