<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryList;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Category::list();
        $data = CategoryList::collection($data);
        return response(['data' => $data, 'success' => true, 'msg' => 'request successful']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        Category::store($request);
        return response(['success' => true, 'msg' => 'request successful']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Category::find($id);
        $data = new CategoryList($data);
        return response(['success' => true, 'data' => $data, 'msg' => 'request successful']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        //
        Category::store($request, $id);
        return response(['data' => true, 'msg' => 'updated successful', 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Category::destroy($id);
        return response(['data' => true, 'msg' => 'deleted successful', 'success' => true]);
    }
}
