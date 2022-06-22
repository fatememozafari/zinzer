<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'user_id'=>'1',
            'avatar_path1'=>'/zinzer/assets/images/small/img-1.jpg',
            'avatar_path2'=>'/zinzer/assets/images/small/img-2.jpg',
            'avatar_path3'=>'/zinzer/assets/images/small/img-3.jpg',
        ]);
    }
}
