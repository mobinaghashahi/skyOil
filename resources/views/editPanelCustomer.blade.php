@extends('layout.master')

@section('content')
    <div class="col-12" style="justify-content: center;display: flex">
        <div class="col-9" style="padding: 15px; background-image: linear-gradient(#717c89,#2d3748);color: white;margin: 30px 0px 30px 0px;border-radius: 15px">
            <div class="col-12" style="text-align: center;color: white;margin: 10px 0px 20px 0px">
                <h>
                    ویرایش مشتری
                </h>
            </div>
            <table class="tEditCustomer">
                <tr>
                    <th class="firstRow">حذف و ادیت</th>
                    <th class="firstRow">شماره موبایل</th>
                    <th class="firstRow">کد ملی</th>
                    <th class="firstRow">نام خانوادگی</th>
                    <th class="firstRow">نام</th>
                    <th class="firstRow">ردیف</th>
                </tr>
            @foreach ($users as $index => $user)
                    <tr>
                        <th><div class="col-12" style="display:flex;justify-content: center">
                                <div class="col-3">
                                    <form action="/admin/deleteCustomer/{{$user->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button style="background-color: #2d3748">حذف</button>
                                    </form>
                                </div>
                                <div class="col-3">
                                    <a href="/admin/editCustomer/{{$user->id}}"><button style="background-color: #2d3748">ویرایش</button>
                                </div></a>

                            </div></th>
                        <th>{{$user->phoneNumber}}</th>
                        <th>{{$user->meliCode}}</th>
                        <th>{{$user->family}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$index+1}}</th>
                    </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection
