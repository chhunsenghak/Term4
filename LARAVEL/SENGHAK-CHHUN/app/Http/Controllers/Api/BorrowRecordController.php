<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BorrowRecords;
use App\Models\User;
use App\Models\Books;

class BorrowRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = BorrowRecords::list();
        try {
            return response(["success" => true, "data" => $data]);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $date)
    {
        //
        $data = BorrowRecords::findDate($date);
        $data->user_id = User::find($data->user_id);
        $data->book_id = Books::find($data->book_id);
        try {
            return response(["success" => true, "data" => $data]);
        } catch (\Exception $e) {
            return response(["success" => false, "message" => $e->getMessage()]);
        }
    }
}
