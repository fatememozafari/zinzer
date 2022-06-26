<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Home;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerDashboardController extends Controller
{
    public function index()
    {
        $titleCard = 'لیست';
        $th = [
            'title',
            'body',
            'avatar_path',
            'user_id'];

        $article = Article::query()
//            ->where('user_id',Auth::id())
            ->orderBy('id', 'DESC')
            ->get();
        $news = News::query()
//            ->where('user_id',Auth::id())
            ->orderBy('id', 'DESC')
            ->get();
        $home=Home::query()
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();

        return view('super-admin.manager-dashboard',compact('th','article','news','home'));

  }

    public function index2()
    {
        //

//        $this->checkPermission('cases_read');

        $titleCard = 'لیست';
        $th = ['شناسه',
            'title',
            'price',
            'contract',
            'type',
            'status',
            'operation'];

        $query = CaseModel::query()
//            ->where('user_id',Auth::id())
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.cases.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );

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

        return view('admin.cases.create');
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
            'title',
            'price',
            'user_id',
            'address',
            'room_number',
            'parking_number',
            'bath_number',
            'area',
            'deposit',
            'rent',
            'type',
            'contract',
            'is_vip',
            'description',
            'status',
            'avatar_path',
            'video_path',
            'details'
        );
        $inputs['user_id'] = Auth::user()->id;

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $result = CaseModel::create($inputs);
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
    public function show($id)
    {
        //
//        $this->checkPermission('cases_read');

        $query = CaseModel::find($id);
        return view('admin.cases.show', ['item' => $query]);
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

        $news = News::where('id', $id)->first();
        return view('super_admin.manager-dashboard.edit', compact('news'));
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

        News::where('id', $id)->update($query);
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

        CaseModel::query()->where('id', $id)->delete();
        return back();
    }

}
