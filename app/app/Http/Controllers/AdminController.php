<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.admin');
    }
    public function cate(CateRequest $request){
        dd($request);
        Category::create($request->all());
        return redirect()->back();
    }
}
