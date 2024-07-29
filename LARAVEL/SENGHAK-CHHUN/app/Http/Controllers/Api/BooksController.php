<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Resources\BookListResource;
use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Books::list();
        try {
            $data = BookListResource::collection($data);
            return response(["success" => true, "data" => $data, "msg" => "list all books"]);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBooksRequest $request)
    {
        //
        $data = Books::store($request);
        try {
            return response(["success" => true, "data" => $data, 'msg' => 'created successfully']);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Books::find($id);
        try {
            $data = new BookListResource($data);
            return response(["success" => true, "data" => $data, 'msg' => 'requested resource']);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Books::store($request, $id);
        try {
            return response(["success" => true, "data" => $data, 'msg' => 'Updated']);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Books::destroy($id);
        try {
            return response(["success" => true, "data" => $data, 'msg' => 'deleted']);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }
}
