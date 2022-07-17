@extends('customerForm.customerForm')
@section('title')
    ویرایش اطلاعات مشتری
@endsection

@section('actionPath')
/admin/editCustomer/{{$customer->id}}
@endsection




@section('name')
{{$customer->name}}
@endsection

@section('family')
{{$customer->family}}
@endsection

@section('meliCode')
{{$customer->meliCode}}
@endsection

@section('carTag')
{{$customer->carTag}}
@endsection

@section('phoneNumber')
{{$customer->phoneNumber}}
@endsection

@section('carType')
{{$customer->carType}}
@endsection

@section('oilName')
{{$customerBuy[count($customerBuy)-1]->oilName}}
@endsection

@section('liter')
{{$customerBuy[count($customerBuy)-1]->liter}}
@endsection

@section('dateChangeOil')
{{$customer->dateChangeOil}}
@endsection


@section('expirationDay')
{{$customer->expirationDay}}
@endsection


@section('serviceMan')
{{$customerBuy[count($customerBuy)-1]->serviceMan}}
@endsection


@section('kilometerCurrent')
{{$customer->kilometerCurrent}}
@endsection


@section('kilometerProposed')
{{$customer->kilometerProposed}}
@endsection

@section('submitName')
ویرایش
@endsection
