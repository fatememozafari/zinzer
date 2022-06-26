<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => ['required'],
            'company_email' => ['email'],
            'password' => ['required'],
            'password_confirmation' => ['required','same:password'],
            'trend' => ['required'],
            'office_address' => ['required'],
            'Laboratory_address' => ['required'],
            'office_phone_number' => ['required','numeric'],
            'IDPay' => ['min:24','max:24'],
            'mobile' => ['required','min:11','max:11'],

        ];
    }

    public function attributes()
    {
        return [
            'company_name'=> 'نام کامل شرکت',
            'license_number'=> 'شماره پروانه شرکت',
            'membership_number'=> 'شماره عضویت',
            'signature_number'=> 'شماره امضای شهرسازی',
            'Responsible_side'=> 'سمت مسئول هیئت مدیره',
            'trend'=> 'گرایش',
            'CEO_name'=> 'نام مدیرعامل',
            'CEO_lastname'=> 'نام خانوادگی مدیر عامل',
            'CEO_id'=> 'کد ملی مدیرعامل',
            'CEO_phone_number'=> 'شماره تماس',
            'boss_name'=> 'نام رئیس هیئت مدیره',
            'boss_lastname'=> 'نام خانوادگی رئیس هیئت مدیره',
            'boss_id'=> 'کد ملی رئیس هیئت مدیره',
            'boss_phone_number'=> 'شماره تماس رئیس هیئت مدیره',
            'member_name'=> 'نام عضو هیئت مدیره',
            'member_lastname'=> 'نام خانوادگی عضو هیئت مدیره',
            'member_id'=> 'کد ملی عضو هیئت مدیره',
            'member_phone_number'=> 'شماره تماس عضو هیئت مدیره',
            'Laboratory_address'=> 'آدرس آزمایشگاه',
            'Laboratory_phone_number'=> 'شماره تماس آزمایشگاه',
            'office_address'=> 'آدرس دفتر مرکزی',
            'office_phone_number'=> 'شماره تماس دفتر مرکزی',
            'company_email'=> 'ایمیل',
            'IDPay'=> 'شماره شبا',
            'Insurance_number'=> 'شماره کارگاه بیمه',
            'password'=> 'رمز عبور',
            'password_confirmation'=> 'تایید رمز عبور',
            'Accept_rules'=> 'شرایط و ضوابط',
            'mobile'=> 'شماره تماس جهت ارسال کد',
        ];
    }

    public function messages()
    {
        return [
            'required' => '  :attribute اجباری است',
            'min' => ' :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'email'=>':attribute  را با فرمت صحیح وارد کنید',
        ];

    }

}
