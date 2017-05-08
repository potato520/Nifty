<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ArticleCreateRequest;
use App\Repositories\Backend\CategoryRepositoryEloquent;
use Auth;
use App\models;
use App\Repositories\Backend\ArticleRepositoryEloquent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    protected $article;
    protected $category;

    public function __construct(ArticleRepositoryEloquent $article, CategoryRepositoryEloquent $category)
    {
        $this->article = $article;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = [];
        $title = $request->input('title', '');
        $cateId = $request->input('cate_id', 0);

        // 获取分类
        $category = models\Category::all();

        // 文章列表
         $article = models\Article::where('title', 'like', "%$title%")
             ->orwhere('cate_id', '=', $cateId)->paginate(2);


        return view('backend.article.index', compact('article','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取分类
        $category = models\Category::all();
        return view('backend.article.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleCreateRequest $request)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['keyword'] = isset($request->keyword) ? $request->keyword : '';
        $data['desc'] = isset($request->desc) ? $request->desc : '';
        $data['content'] = $request->contents;
        $data['cate_id'] = $request->cate_id;
        $data['user_id'] = Auth::user()->id;
        $result = $this->article->create($data);
        if($request){
            if(!empty($request->tags)){
                //
            }
            return redirect('backend/article')->with('success', '文章添加成功');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
