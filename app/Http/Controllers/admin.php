<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class admin extends Controller
{
    function showAddCostumerForm(){
        return view('addCustomer');
    }
    function addCostumer(Request $request){
        $valid=$request->validate([
            'name'=>'required',
            'family'=>'required',
            'meliCode'=>'required',
            'carTag'=>'required',
            'phoneNumber'=>'required',
            'dateChangeOil'=>'required',
            'expirationDay'=>'required'
        ]);
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->family=$request->family;
        $customer->meliCode=$request->meliCode;
        $customer->carTag=$request->carTag;
        $customer->phoneNumber=$request->phoneNumber;
        $customer->carType=$request->carType;
        $customer->dateChangeOil=$request->dateChangeOil;
        $customer->expirationDay=$request->expirationDay;
        $customer->save();
        return redirect('admin/addCustomer')->with('msg','کاربر با موفقیت افزوده شد');
    }
}
