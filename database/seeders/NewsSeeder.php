<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      News::create([
          'title'=>'خبر یک',
          'body'=>'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.',
          'avatar_path'=>'/zinzer/assets/images/small/img-4.jpg',
          'user_id'=>'1'

      ]);
        News::create([
            'title'=>'خبر دو',
            'body'=>'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.',
            'avatar_path'=>'/zinzer/assets/images/small/img-5.jpg',
            'user_id'=>'1'

        ]);
        News::create([
            'title'=>'خبر سه',
            'body'=>'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.',
            'avatar_path'=>'/zinzer/assets/images/small/img-6.jpg',
            'user_id'=>'1'

        ]);
    }
}
