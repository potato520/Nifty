<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CategoryCreateRequest;
use App\Http\Requests\Backend\CategoryUpdateRequest;
use App\Repositories\Backend\CategoryRepositoryEloquent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryEloquent $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->category->all();
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['parent_id'] = $request->parent_id;
        $result = $this->category->create($data);
        if($result){
            return redirect('backend/category')->with('success', '分类添加成功');
        }
        return redirect(route('backend.category.index'))->withErrors('系统异常，分类添加失败');
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
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = $this->category->find($id)->toArray();
        echo json_encode(array('status' => 1, 'data' => $edit)); exit();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $data = [];
        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['parent_id'] = $request->parent_id;
        $result = $this->category->update($data, $request->id);
        if($result){
            return redirect('backend/category')->with('success', '分类修改成功');
        }
        return redirect(route('backend.category', ['id' => $id]))->withErrors('系统异常，分类修改失败');
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
        if ($this->category->delete($id)) {
            return response()->json(['status' => 0]);
            return redirect('backend/category')->with('success', '分类删除成功');
        }
        return response()->json(['status' => 1]);
    }
}
