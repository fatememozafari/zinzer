<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type'=>'user',
           'company_name'=>'hadi-roshan-zamiran',
           'license_number'=>'1',
           'membership_number'=>'1',
           'signature_number'=>'1',
           'Responsible_side'=>'BOSS',
           'trend'=>'GEOTECHNIC',
           'Laboratory_address'=>'alborz',
           'Laboratory_phone_number'=>'33665544',
           'office_address'=>'alborz',
           'office_phone_number'=>'33998877',
           'company_email'=>'hhaaddiicivil@yahoo.com',
           'IDPay'=>'123456789123456789123456',
           'password'=>'123456',
           'password_confirmation'=>'123456',
           'Accept_rules'=>'1',
           'mobile'=>'09123502495',

        ]);

        User::create([
            'type'=>'user',
            'company_name'=>'admin',
            'license_number'=>'1',
            'membership_number'=>'1',
            'signature_number'=>'1',
            'Responsible_side'=>'BOSS',
            'trend'=>'GEOTECHNIC',
            'Laboratory_address'=>'alborz',
            'Laboratory_phone_number'=>'33665544',
            'office_address'=>'alborz',
            'office_phone_number'=>'33998877',
            'company_email'=>'fftm2010s@yahoo.com',
            'IDPay'=>'123456789123456789123456',
            'password'=>'123456',
            'password_confirmation'=>'123456',
            'Accept_rules'=>'1',
            'mobile'=>'09186424052',

        ]);
    }
}
