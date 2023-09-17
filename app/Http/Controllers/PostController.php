<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function add(Request $request)
    {
        $formfields = $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->content = $request->input('content');
    
        // Check if an image was provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $post->image = $imagePath;
        }
    
        $post->save();
    
        return redirect('/users/chat/create')->with('success', 'You have successfully added a post.');
    }
    

    public function index()
    {
        $posts = Post::all();

        return view('Users.chat.index', compact('posts'));
    }


    public function showPostPage($id) {
        $post = Post::find($id);
        $comments = $post->comments ?? []; // Use the null coalescing operator to provide an empty array if $comments is null
        return view('Users.chat.Post', ['post' => $post, 'comments' => $comments]); 
    }
    
    
    
}
