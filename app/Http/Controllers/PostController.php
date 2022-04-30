<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

	public function show(Post $post) {

		return view('layouts.blog-post', ['post' => $post]);

	}

	public function create() {

		return view('admin.posts.create');
	}

	public function store() {

		$inputs = request()->validate([
			'title' => 'required|min:8|max:225',
			'post_image' => 'file',
			'body' => 'required',
		]);

		if(request('post_image')) {

			$inputs['post_image'] = request('post_image')->store('');

		}

		auth()->user()->posts()->create($inputs);

		return back();
	}

	public function index() {

		return view('admin.posts.index');
	}
    //
}
