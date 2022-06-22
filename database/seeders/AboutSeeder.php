<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'user_id'=>'1',
            'avatar_path'=>'/zinzer/assets/images/small/img-4.jpg',
            'body'=>'نکته مهمی که در بیشتر سایتهای ایرانی توجهی به آن نمیشود طراحی صفحه درباره ما یا همان About Us است. اکثر افراد در این بخش مطالبی طولانی و خسته کننده برای کاربر و یا نوشته ای کوتاه و ناقص قرار میدهند که میتواند اعتبار سایت یا شرکت شما را زیر سوال ببرد. معمولا تصور میشود که کاربران به صفحه درباره ما توجهی نکرده، متن معرفی شرکت را نمی خوانند و بیشتر به خدمات و محصولات ارائه شده در سایت مراجعه میکنند، این تفکر تا حدی صحیح است ولی زمانیکه قرار است یک بازدیدکننده به مشتری تبدیل شود اهمیت صفحه درباره ما یا درباره شرکت بیش از پیش افزایش می یابد. بعنوان طراح سایت یا صاحب شرکت تمرکز ما بیشتر بر روی صفحات داخلی سایت و ارائه بهتر محصولات است و این امر موجب کاهش توجه به بخش های اصلی مانند صفحه درباره ما و تماس با ما خواهد شد. در دنیای تجارت امروز، برندها و شرکت های بزرگ در ارتباط با مشتریان و ایجاد احساس شناخت متقابل بسیار موفق عمل کرده اند تا جاییکه شما صاحبان بسیاری از شرکت های بزرگ مانند اپل و گوگل را بخوبی میشناسید و حتی ممکن است زندگینامه آنها را مطالعه کرده باشید.'
        ]);
    }
}
