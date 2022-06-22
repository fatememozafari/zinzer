<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {


        $query = About::query()
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();
        return view('super-admin.about.index', ['items' => $query]);



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

        return view('super-admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $this->checkPermission('cases_create');

        $inputs = $request->only(
            'user_id',
            'body',
            'avatar_path',

        );
        $inputs['user_id'] = Auth::user()->id;

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $about = About::create($inputs);
        if ($about) {
            return back()->with('success', 'با موفقیت ثبت شد');
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

        $query = About::query()
            ->orderBy('id','DESC')
            ->first();
        return view('zinzer.about', ['item' => $query]);
    }

    public function edit($id)
    {


        $query = About::where('id', $id)->first();
        return view('super-admin.about.edit', ['item' => $query]);
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

        $query = $request->only(
            [  'body',
                'avatar_path',
                'user_id'
            ]

        );
        if ($request->file('avatar_path'))
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        About::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

}
