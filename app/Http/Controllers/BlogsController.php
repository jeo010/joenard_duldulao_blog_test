<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class BlogsController extends Controller
{
    public function index(){
		return view('blogs.show',[
			'comments'=>Comment::where('parent_id',null)->with('replies')->orderBy('posted_at','desc')->get(),
		]);
	}
}
