<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Models\Customer;
use App\Models\oilBuy;
use App\Models\reward;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class admin extends Controller
{
    function showAddCostumerForm()
    {
        Verta::setStringformat('Y/n/j');
        $v=verta();
        $v->timezone('Asia/Tehran');
        return view('addCustomer',['toDay'=>$v]);
    }

    function addCostumer(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'family'=>'required',
            'meliCode'=>'required|max:10|min:10',
            'carTag'=>'required',
            'phoneNumber'=>'required|max:11|min:11',
            'dateChangeOil'=>'required',
            'expirationDay'=>'required|int|min:0',
            'oilName'=>'required',
            'kilometerCurrent'=>'required|int|min:0',
            'kilometerProposed'=>'required|int|min:0',
            'liter'=>'required|int|min:0',
        ]);

        $customer = Customer::where('meliCode', $request->meliCode)->first();
        if ($customer)
            return redirect('admin/addCustomer/')->with('error', 'این مشتری قبلا افزوده شده است.');

        $customer=new Customer();
        $customer->name=$request->name;
        $customer->family=$request->family;
        $customer->meliCode=$request->meliCode;
        $customer->carTag=$request->carTag;
        $customer->phoneNumber=$request->phoneNumber;
        $customer->carType=$request->carType;
        $customer->dateChangeOil=$request->dateChangeOil;
        $customer->expirationDay=$request->expirationDay;
        $customer->kilometerCurrent=$request->kilometerCurrent;
        $customer->kilometerProposed=$request->kilometerProposed;
        $customer->save();

        $oilBuy=new oilBuy();
        $oilBuy->oilName=$request->oilName;
        $oilBuy->liter=$request->liter;
        $oilBuy->dateChangeOil=$request->dateChangeOil;
        $oilBuy->serviceMan=$request->serviceMan;
        $oilBuy->custumer_id=$customer->id;
        $oilBuy->save();

        return redirect('admin/addCustomer')->with('msg','کاربر با موفقیت افزوده شد');
    }
    function editPanelCustomer(Request $request){
        return view('editPanelCustomer',['customer'=>Customer::where('meliCode','LIKE','%'.$request->meliCode.'%')->get()]);
    }

    function customerEditSearch(){
        return view('customerEditSearch');
    }

    function deleteCustomer(Request $r,$id){

        $customer=Customer::findOrFail($id);

        $customer->delete();
        $msg=$customer->name.' '.$customer->family.' با موفقیت حذف شد.';
        return redirect('admin/customerEditSearch' )->with('msg', $msg);
    }
    function showEditCustomer($id){
        return view('editCustomer',['customer'=>Customer::findOrFail($id),'customerBuy'=>Customer::join('oilbuy','oilbuy.custumer_id','=','customer.id')->where('custumer_id',$id)->get()]);
    }
    function editCustomer(Request $request,$id) {
        $valid = $request->validate([
            'name' => 'required',
            'family'=>'required',
            'meliCode'=>'required|max:10|min:10',
            'carTag'=>'required',
            'phoneNumber'=>'required|max:11|min:11',
            'dateChangeOil'=>'required',
            'expirationDay'=>'required|int|min:0',
            'oilName'=>'required',
            'kilometerCurrent'=>'required|int|min:0',
            'kilometerProposed'=>'required|int|min:0',
            'liter'=>'required|int|min:0',
        ]);
        $customer=Customer::findOrFail($id);

        $customer->update([
            'name'=>$request->name,
            'family'=>$request->family,
            'meliCode'=>$request->meliCode,
            'carTag'=>$request->carTag,
            'carType'=>$request->carType,
            'phoneNumber' => $request->phoneNumber,
            'dateChangeOil' => $request->dateChangeOil,
            'expirationDay' => $request->expirationDay,
            'kilometerProposed' => $request->kilometerProposed,
            'kilometerCurrent' => $request->kilometerCurrent,
        ]);

        //واکشی اطلاعات مربوط به تعویش روغن و ایجاد تغییرات بر روی آن
        $oilBuy=oilBuy::where('custumer_id',$id)->get();
        $oilBuy=$oilBuy[count($oilBuy)-1];

        $oilBuy->update([
            'oilName'=>$request->oilName,
            'liter'=>$request->liter,
            'serviceMan'=>$request->serviceMan,
        ]);
        return redirect('admin/editCustomer/' . $id)->with('msg', 'کاربر با موفقیت ویرایش شد');
    }

    public function reportCustomers(Request $request)
    {
        return Excel::download(new UsersExport, 'گزارش کلی.xlsx');
    }
    public function reportCustomer(Request $request){
        $customer = Customer::where('meliCode', $request->meliCode)->first();
        if ($customer == null)
            return redirect('admin/customerSearch/')->with('error', 'کد ملی وارد شده وجود ندارد');
        return view('reportCustomer',['customerRewards'=>Customer::join('reward','reward.custumer_id','=','customer.id')->where('meliCode',$request->meliCode)->get(),'customerBuy'=>Customer::join('oilbuy','oilbuy.custumer_id','=','customer.id')->where('meliCode',$request->meliCode)->get(),'customer'=>Customer::where('meliCode',$request->meliCode)->get()]);
    }
    public function customerSearch(){
        return view('customerSearch');
    }

    public function oilChangeView()
    {
        Verta::setStringformat('Y/n/j');
        $v=verta();
        $v->timezone('Asia/Tehran');
        return view('oilChange',['toDay'=>$v]);
    }

    public function oilChangeUpdate(Request $request)
    {

        $valid = $request->validate([
            'meliCode'=>'required|max:10|min:10',
            'dateChangeOil'=>'required',
            'expirationDay'=>'required',
            'oilName'=>'required',
            'liter'=>'required',
            'kilometerCurrent'=>'required|int|min:0',
            'kilometerProposed'=>'required|int|min:0',
        ]);


        $customer = Customer::where('meliCode', $request->meliCode)->first();
        if ($customer == null)
            return redirect('admin/oilChange/')->with('error', 'کد ملی وارد شده وجود ندارد');

        $customer->update([
            'smsSent' => 0,
            'dateChangeOil' => $request->dateChangeOil,
            'expirationDay' => $request->expirationDay,
            'kilometerPrevious' => $customer->kilometerCurrent,
            'kilometerCurrent' => $request->kilometerCurrent,

        ]);
        $oilBuy=new oilBuy();
        $oilBuy->oilName=$request->oilName;
        $oilBuy->liter=$request->liter;
        $oilBuy->dateChangeOil=$request->dateChangeOil;
        $oilBuy->custumer_id=$customer->id;
        $oilBuy->serviceMan=$request->serviceMan;
        $oilBuy->save();

        $msg='تاریخ تعویض روغن کاربر با موفقیت ویرایش شد.';
        return redirect('admin/oilChange/')->with('msg', $msg);
    }
    public function rewardView()
    {
        Verta::setStringformat('Y/n/j');
        $v=verta();
        $v->timezone('Asia/Tehran');
        return view('reward',['toDay'=>$v]);
    }
    public function addReward(Request $request)
    {
        $valid = $request->validate([
            'meliCode'=>'required|max:10|min:10',
            'rewardTitle'=>'required',
            'dateRewardPay'=>'required',
            'payScore'=>'int|min:0',
        ]);

        //چک کردن وجود مشتری جهت دریافت هدیه
        $customer = Customer::where('meliCode', $request->meliCode)->first();
        if ($customer == null)
            return redirect('admin/reward/')->with('error', 'کد ملی وارد شده وجود ندارد');

        $sumScore=sumScore($customer->id);
        $sumScorePay=sumScorePay($customer->id);
        $remainingScore=$sumScore-$sumScorePay;

        if($remainingScore>=$request->payScore){
            $reward=new reward();
            $reward->rewardTitle=$request->rewardTitle;
            $reward->scorePay=$request->payScore;
            $reward->datePayReward=$request->dateRewardPay;
            $reward->custumer_id=$customer->id;
            $reward->save();
            return redirect('admin/reward/' )->with('msg', 'هدیه با موفقیت ثبت شد');
        }
        $errorMsg=' امتیاز کاربر به اندازه کافی نیست. امتیاز باقی مانده کاربر'.$remainingScore.' است.';
        return redirect('admin/reward/')->with('error', $errorMsg);
    }

}
