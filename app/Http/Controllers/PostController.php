<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function createPost(Request $request){
        $PostData = $request->validate(
            [
                'title' => 'required',
                'body' => 'required'
            ]
            );
            $PostData['title'] = strip_tags($PostData['title']);
            $PostData['body'] = strip_tags($PostData['body']);
            $PostData['user_id'] = auth()->id();
            Post::create($PostData);
    }
}
