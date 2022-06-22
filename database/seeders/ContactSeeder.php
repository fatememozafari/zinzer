<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'user_id'=>'1',
            'number'=>'09129999900',
            'address'=>'آدرس پستی : تهران - ميدان ونک - خيابان ونک - شماره 88 - برج همراه كد پستی: 1991954651',
            'email'=>'info@zinzer.com',
            'body'=>'مرکز تلفن امور اداری همراه اول : 021-81711',
            'avatar_path'=>'/zinzer/assets/images/small/aboutus.jpg'
        ]);
    }
}
