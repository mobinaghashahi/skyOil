@extends('layout.master')

@section('content')

    <div class="col-12" style="display: flex;justify-content: center;margin: 50px 0px 50px 0px;">
        <div class="col-9" style="background-image: linear-gradient(#717c89,#2d3748);border-radius: 50px;padding: 20px">
            <div class="col-12 addCostumerFilds">
                <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                    <h>اضاف کردن مشتری جدید</h>
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="نام" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="نام خانوادگی" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="کد ملی" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="شماره پلاک" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="شماره موبایل" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="نوع ماشین" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="تاریخ تعویض روغن" type="email" style="text-align: center">
                </div>
                <div class="col-6 addCostumerFild">
                    <input class="input" name="email" placeholder="تاریخ انقضا روغن (به روز)" type="email" style="text-align: center">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                    <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                           value="اضاف کردن">
                </div>
            </div>
        </div>
    </div>

@endsection
