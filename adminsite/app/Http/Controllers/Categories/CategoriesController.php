<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category_index;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category_index::where('status','1')->get();
        return view('categories.index',['data' => $category]);
    }

    protected function create(Request $request)
    {
        try{
            $Category_index = new Category_index();
            $Category_index->category_name = $request->input('category-name');
            $Category_index->status = '1';
            $Category_index->save();
            
            return redirect('categories/')->with('noti-status-success', 'Category insert success!');
         } 
         catch(\Exception $e){
            return redirect('categories/')->with('noti-status-fail', 'Category insert fail!');
         }
    }

    protected function delete($id)
    {
        $Category_index = new Category_index();
        $Category_index->exists = true;
        $Category_index->id = $id; //already exists in database.
        $Category_index->status = '0';
        $Category_index->save();

        return redirect('categories/')->with('noti-status-success', 'Category delete success!');
    }
}


