<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {

        $titleCard = 'لیست';
        $th = [
            'title',
            'body',
            'avatar_path',
            'user_id'];

        $query = Article::query()
//            ->where('user_id',Auth::id())
            ->orderBy('id', 'DESC')
            ->get();

        return view('super-admin.manager-dashboard',
            [
                'article' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('super-admin.article.create');
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
            'title',
            'body',
            'avatar_path',
            'user_id'
        );
        $inputs['user_id'] = Auth::user()->id;

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $result = Article::create($inputs);
        if ($result) {
            return redirect('/super-admin/manager-dashboard')->with('success', 'با موفقیت ارسال شد');
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

        $query = Article::query()
            ->orderBy('id','DESC')
            ->get();
        return view('zinzer.article', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {


        $query = Article::where('id', $id)->first();
        return view('super-admin.article.edit', ['item' => $query]);
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
            'title',
            'body',
            'avatar_path',
            'user_id'
        );
        if ($request->file('avatar_path'))
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        Article::where('id', $id)->update($query);
        return redirect('/super-admin/manager-dashboard')->with('success', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Article::query()->where('id', $id)->delete();
        return back();
    }

}
