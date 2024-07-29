<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductList;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Products::list();
        $data = ProductList::collection($data);
        return response(['success' => true, 'data' => $data, 'msg' => 'request completed']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Products::store($request);
        return response(['success' => true, 'msg' => 'created completed']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Products::find($id);
        $data = new ProductList($data);
        return response(['data' => $data, 'success' => true, 'msg' => 'request completed']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        Products::store($request, $id);
        return response(['success' => true,  'msg' => 'updated completed']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Products::destroy($id);
        return response(['success' => true, 'msg' => 'deleted completed']);
    }
}
