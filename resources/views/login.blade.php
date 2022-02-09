@extends('layout.master')

@section('content')


    <div class="col-12" style="margin:0px 0px 0px 0px;">
        <div class="col-12" style="display: flex;justify-content: center;margin:65px 0px 65px 0px;">
            <div class="col-3"
                 style="display: flex;justify-content: center;background-image: linear-gradient(#717c89,#2d3748);padding: 30px;border-radius: 50px">
                <form method="post" name="enter" action="validation.php">
                    <div class="col-12" style="text-align: center;margin: 0px 0px 15px 0px;">
                        نام کاربری
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center">
                        <input class="input" name="username" type="email">
                    </div>
                    <div class="col-12" style="text-align: center;margin: 5px 0px 10px 0px">
                        رمز عبور
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 0px 0px 20px 0px">
                        <input class="input" name="password" type="password">
                    </div>
                    <div class="col-12" style="display: flex;justify-content: center;margin: 20px 0px 20px 0px">
                        <input style="width: 45%;height: 40px;border-radius: 5px" name="enter" type="submit" value="ورود">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
