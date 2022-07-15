@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-8" style="background-color: #2d3748; margin: 50px;padding: 20px;border-radius: 10px">
            <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                <h>فاکتور فروش مشتری</h>
            </div>
            <form name="reportCustomer" action="/admin/reportCustomer/1" method="post">
                @csrf
                @include('layout.msg')
                @include('layout.queryMsg')
                @include('layout.errorValidation')
                <div class="col-12" style="display: flex;justify-content: center">
                    <input class="input" name="meliCode" placeholder="کد ملی مشتری" type="text" style="text-align: center;margin: 20px 0px 20px 0px">
                </div>
                <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                    <input style="width: 150px;height: 40px;border-radius: 5px" name="enter" type="submit"
                           value="ایجاد فاکتور">
                </div>
            </form>
        </div>
    </div>
@endsection
