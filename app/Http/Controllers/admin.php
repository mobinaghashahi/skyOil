<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;



use App\Models\Customer;
use App\Models\User;




class admin extends Controller
{
    function showAddCostumerForm(){
        return view('addCustomer');
    }
    function addCostumer(Request $request){
        $valid=$request->validate([
            'name'=>'required',
            'family'=>'required',
            'meliCode'=>'required|max:10|min:10',
            'carTag'=>'required',
            'phoneNumber'=>'required|max:11|min:11',
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
    function editPanelCustomer(){
        return view('editPanelCustomer',['users'=>Customer::all()]);
    }
    function deleteCustomer($id){
        $customer=Customer::findOrFail($id);
        $customer->delete();
        return back();
    }
    function showEditCustomer($id){
        return view('editCustomer',['customer'=>Customer::findOrFail($id)]);
    }
    function editCustomer(Request $request,$id) {
        $valid=$request->validate([
            'name'=>'required',
            'family'=>'required',
            'meliCode'=>'required|max:10|min:10',
            'carTag'=>'required',
            'phoneNumber'=>'required|max:11|min:11',
            'dateChangeOil'=>'required',
            'expirationDay'=>'required'
        ]);
        $customer=Customer::findOrFail($id);

        $customer->update([
            'name'=>$request->name,
            'family'=>$request->family,
            'meliCode'=>$request->meliCode,
            'carTag'=>$request->carTag,
            'phoneNumber'=>$request->phoneNumber,
            'dateChangeOil'=>$request->dateChangeOil,
            'expirationDay'=>$request->expirationDay,
        ]);

        return redirect('admin/editCustomer/'.$id)->with('msg','کاربر با موفقیت ویرایش شد');
    }
    public function reportCustomers(Request $request){
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
}
