<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use App\Model\Users;
use App\Model\Category_index;
use App\Model\Content;

class PostController extends Controller
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
        //$users = Users::all();
        $content = Content::where('status','1')->get();
        return view('content.index',['data' => $content]);
    }

    public function post_index()
    {
        $category = Category_index::where('status','1')->select('id', 'category_name')->get();
        return view('content.post',['category_data' => $category]);
    }

    public function store(Request $request)
    {
        $validate = $this->validate(request(), [
            'title' => 'required',
            'introduce' => 'required',
            'content' => 'required'
        ]);
        
        try{
            $Content = new Content();
            $Content->title = $request->input('title');
            $Content->image = 'test';
            $Content->introduce = $request->input('introduce');
            $Content->content = $request->input('content');
            $Content->author_id = 'test';
            $Content->categories = $request->input('categories');
            $Content->publish = $request->input('publish') == null?0:1;
            $Content->sponser = $request->input('sponser') == null?0:1;
            $Content->status = '1';
            $Content->save();
            
            return redirect('content/')->with('noti-status-success', 'content insert success!');
         } 
         catch(\Exception $e){
            return redirect('content/')->with('noti-status-fail', 'content insert fail!');
         }

        //return $request;
    }
}


