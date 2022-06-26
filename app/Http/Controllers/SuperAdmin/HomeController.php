<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Home;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {


        $home = Home::query()
//            ->where('user_id',Auth::id())
            ->orderBy('id', 'DESC')
            ->get();

        return view('super-admin.home', compact('home'));

//
//        $query=Post::get();
//        return view('admin.posts.index',['items'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $this->checkPermission('cases_create');

        return view('super-admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        $inputs = $request->only(
            'user_id',
            'avatar_path',


        );
        $inputs['user_id'] = Auth::user()->id;

        if ($request->file('avatar_path')){
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        }

        $result = Home::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
//        $this->checkPermission('cases_update');

        $query = Home::where('id', $id)->first();
        return view('super-admin.home.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
//        $this->checkPermission('cases_update');

        $query = $request->only(
            'user_id',
            'avatar_path',

        );
        if ($request->file('avatar_path')){
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }



        Home::where('id', $id)->update($query);

        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//        $this->checkPermission('cases_delete');

        Home::query()->where('id', $id)->delete();
        return back();
    }

}
