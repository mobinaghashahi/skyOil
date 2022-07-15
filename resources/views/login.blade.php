@extends('layout.master')

@section('content')


    <div class="col-12" style="margin:0px 0px 0px 0px;">
        <div class="col-12" style="display: flex;justify-content: center;margin:65px 0px 65px 0px;">
            <div class="col-3"
                 style="display: flex;justify-content: center;background-image: linear-gradient(#717c89,#2d3748);padding: 30px;border-radius: 50px">
                <form method="post" name="enter" action="/login">
                    @csrf
                    @include('layout.msg')
                    @include('layout.queryMsg')
                    @include('layout.errorValidation')
                    <div class="col-12" style="display: flex;justify-content: center;margin: 30px 0px 10px 0px;">
                        <input class="input" name="email" placeholder="ایمیل" type="email" style="text-align: center">
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 0px 0px 20px 0px">
                        <input type="password" placeholder="رمز عبور" id="password" name="password"
                               style="text-align: center;margin: 10px 0px 10px 0px;">
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                        <input style="width: 45%;height: 40px;border-radius: 5px" name="enter" type="submit"
                               value="ورود">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
