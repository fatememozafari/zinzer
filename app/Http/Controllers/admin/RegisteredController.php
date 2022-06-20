<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('admin/registered-files/index');
  }

    public function search(Request $request)
    {
//
//        if( ! in_array('view_posts' , $user->permissions))
//            abort(401);
//            Cases::query()->where('user_id',  Auth::user()->id);

        $items = CaseModel::query()->orderBy('id', 'DESC');

        if ($request->get('q'))
            $items = $items->where('map_registration_number', 'like', '%' . $request->get('q') . '%');


        return view('admin/registered-files/index', compact('items', 'request'));
    }

}
