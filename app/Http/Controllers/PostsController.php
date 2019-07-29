<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::all();
		

		return view('posts.index', compact('posts'));
	}

	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		$post = new Post();

		$post->title = request('title');
		$post->description = request('description');

		$post->save();
	
		return redirect('/posts');

	}

	public function edit()
	{
		return view('posts.edit');
	}	
	
	public function update()
	{
	
	}

	public function destroy()
	{
	
	}
}
