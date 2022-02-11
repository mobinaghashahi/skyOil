<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request) //دریافت رگوئست ارسالی کاربر در صفحه ورود
    {
        $validated = $request->validate([ //داده ها رو اعتبار سنجی میکنیم
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) { //اگر کاربری با مشخصات داده شده موجود باشد نتیجه صحیح باز میگردد
            $request->session()->regenerate(); //سشن را بازسازی می کنیم
            return redirect()->intended('/'); //کاربر احراز هویت شده را با داشبورد منتقل می کنیم
        }
        return back()->withErrors([ //کاربر پیدا نشد و هنگام بازگشت به صفحه ورود خطا را نشان میدهیم
            'email' => 'کاربری با این مشخصات وجود ندارد',
        ]);
    }

    function viewLoginForm(){
        return view('login');
    }
    function test(){
        return view('index');
    }
    public function logout(Request $request)
    {
        Auth::logout(); //باطل کردن احراز هویت فعلی

        $request->session()->invalidate(); //نامعتبر سازی سشن های فعلی

        $request->session()->regenerateToken(); //تولید مجدد توکن

        return redirect('/login'); //ریدایرکت کاربر به صفحه اصلی
    }
}
