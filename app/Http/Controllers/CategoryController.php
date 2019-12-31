<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function index(){
      
        DB::beginTransaction();
        $category=DB::table('categories')->select('id', 'nombre')->get();
        DB::commit();
        if(!$category){
            DB::rollback();
        }
        return response()->json($category, 200);

    }
}
