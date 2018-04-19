<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Content;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_content()
    {
        $content = Content::where('status','1')->orderByDesc('created_at')->get();
        return response()->json($content);
    }

    public function get_content_view($content)
    {
        $content = Content::where('status','1')
        ->where('secure_meta',$content)
        ->orderByDesc('created_at')->get();
        return response()->json($content);
    }
    
}


