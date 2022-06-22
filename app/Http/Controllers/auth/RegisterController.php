<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }


    public function Register(CompanyRequest $request)
    {
        $messages = [];
        $data = $request->all();
        $validator = Validator::make($data, $messages);
        if ($validator->fails()) {
            return back()->with('errors', $validator);
        }
        $data['type']='user';
        $data['password'] = bcrypt($request->password);
        if (!$request->has('Accept_rules')) {
            return back()->with('error', 'با خطا مواجه شد. مجدد امتحان کنید.');
        } elseif ($data['Accept_rules'] = true) {
            User::create($data);
            return redirect()->route('auth.login.form')->with('success', 'با موفقیت ثبت شدید.');
        }
    }
    }
