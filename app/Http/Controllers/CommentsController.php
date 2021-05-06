<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

class CommentsController extends Controller
{
	
	public function store(){
		$this->validateComment();
		if(request('current_depth')>=3){
			$depth=3;
		}else{
			$depth=request('current_depth')+1;
		}
		$comment=new Comment();
		$comment->insert([
			'username' => request('username'),
			'comment' => request('comment'),
			'depth' => $depth,
			'parent_id' => request('parent_id')
		]);
		$response = array(
			'status' => 'success'
		);
		return response()->json($response);
	}

	public function index(){
		return view('comments',[
			'comments'=>Comment::where('parent_id',null)->with('replies')->orderBy('posted_at','desc')->get(),
		]);
	}

	private function validateComment(){
		return request()->validate([
			"username" => 'required|string|max:255',
			"comment" => 'required',
			"current_depth" => 'required|numeric'
		]);
	}
}
