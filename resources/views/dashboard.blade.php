@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-10" style="background-image: linear-gradient(#717c89,#2d3748);margin: 70px 20px 70px 20px;border-radius: 20px">
            <div style="display: flex;justify-content: center">
                <div class="col-4" style="text-align: center;margin-top: 20px;color: #e3da27">
                    <h>پنل کاربری محمد مبین آقاشاهی</h>
                </div>
            </div>
            <div class="col-4" style="display: flex;justify-content: center">
                <div class="col-10 dashboardBox">
                    <div class="col-12" style="display: flex;justify-content: center">
                        <img src="image/reportPerson.png" width="30" height="30">
                    </div>
                    <h>گزارش گیری مشتریان</h>
                </div>
            </div>
            <div class="col-4" style="display: flex;justify-content: center">
                <div class="col-10 dashboardBox">
                    <div class="col-12" style="display: flex;justify-content: center">
                        <img src="image/editePerson.png" width="30" height="30">
                    </div>
                    <div class="col-12" >
                        <h>ویرایش مشتری</h>
                    </div>
                </div>
            </div>
            <div class="col-4" style="display: flex;justify-content: center;">
                <div class="col-10 dashboardBox">
                    <div class="col-12" style="display: flex;justify-content: center">
                        <img src="image/addPerson.png" width="30" height="30">
                    </div>
                    <a class="" href="/">اضاف کردن مشتری</a>
                </div>
            </div>
        </div>
    </div>
@endsection
