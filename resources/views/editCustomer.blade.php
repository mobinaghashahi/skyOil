@extends('layout.master')

@section('content')

    <div class="col-12" style="display: flex;justify-content: center;margin: 50px 0px 50px 0px;">
        <div class="col-9" style="background-image: linear-gradient(#717c89,#2d3748);border-radius: 50px;padding: 20px">
            <div class="col-12 addCostumerFilds">
                <form name="addCustomer" action="/admin/editCustomer/{{$customer->id}}" method="post">
                    @csrf
                    <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                        <h>ویرایش اطلاعات مشتری</h>
                    </div>
                    @include('layout.msg')
                    @include('layout.queryMsg')
                    @include('layout.errorValidation')
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="name" placeholder="نام" type="text" style="text-align: center" value="{{$customer->name}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="family" placeholder="نام خانوادگی" type="text"
                               value="{{$customer->family}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="meliCode" placeholder="کد ملی" type="text"
                              value="{{$customer->meliCode}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carTag" placeholder="شماره پلاک" type="text"
                              value="{{$customer->carTag}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="phoneNumber" placeholder="شماره موبایل" type="text"
                                value="{{$customer->phoneNumber}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="carType" placeholder="نوع ماشین" type="text"
                               value="{{$customer->carType}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="oilName" placeholder="نام روغن" type="text"
                               value="{{$customerBuy[count($customerBuy)-1]->oilName}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="liter" placeholder="لیتر" type="text"
                               value="{{$customerBuy[count($customerBuy)-1]->liter}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input name="dateChangeOil" style="text-align: center" type="text"  id="exampleInput3" placeholder="تاریخ" data-placement="right" value="{{$customer->dateChangeOil}}" />
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="expirationDay" placeholder="تاریخ انقضا روغن (به روز)" type="text"
                               value="{{$customer->expirationDay}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="serviceMan" placeholder="نام سرویس کار" type="text"
                                value="{{$customerBuy[count($customerBuy)-1]->serviceMan}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerCurrent" placeholder="شماره کیلومتر" type="text"
                               value="{{$customer->kilometerCurrent}}">
                    </div>
                    <div class="col-6 addCostumerFild">
                        <input class="input" name="kilometerProposed" placeholder="کارکرد پیشنهادی" type="text"
                               value="{{$customer->kilometerProposed}}">
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                        <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                               value="ویرایش">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
