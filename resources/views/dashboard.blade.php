@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-10" style="background-image: linear-gradient(#717c89,#2d3748);margin: 70px 20px 70px 20px;border-radius: 20px">
            <div style="display: flex;justify-content: center">
                <div class="col-4" style="text-align: center;margin-top: 20px;color: #e3da27">
                    <h>پنل کاربری محمد مبین آقاشاهی</h>
                </div>
            </div>
            <div class="col-6" style="display: flex;justify-content: center; float: right">
                <div class="col-10 dashboardBox">
                    <a class="" href="/admin/addCustomer">
                        <div class="col-12" style="display: flex;justify-content: center">
                            <img src="image/addPerson.png" width="30" height="30">
                        </div>
                        افزودن مشتری جدید</a>
                </div>
            </div>
            <div class="col-6" style="display: flex;justify-content: center">
                <div class="col-10 dashboardBox">
                    <a  href="/admin/editPanelCustomer">
                    <div class="col-12" style="display: flex;justify-content: center">
                        <img src="image/editePerson.png" width="30" height="30">
                    </div>
                        ویرایش مشتری</a>
                </div>
            </div>
            <div class="col-6" style="display: flex;justify-content: center">
                <div class="col-10 dashboardBox">
                    <a  href="/admin/reportCustomers">
                        <div class="col-12" style="display: flex;justify-content: center">
                            <img src="image/reportPerson.png" width="30" height="30">
                        </div>
                        گزارش گیری مشتریان</a>
                </div>
            </div>
            <div class="col-6" style="display: flex;justify-content: center;">
                <div class="col-10 dashboardBox">
                    <a class="" href="/admin/oilChange">
                        <div class="col-12" style="display: flex;justify-content: center">
                            <img src="image/oilChange.png" width="35" height="30">
                        </div>
                        تمدید روغن مشتری</a>
                </div>
            </div>
        </div>
    </div>
@endsection
