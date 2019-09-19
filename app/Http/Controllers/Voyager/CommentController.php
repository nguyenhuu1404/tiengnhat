<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        
    }
    public function answers(Request $repuest, $commentId){
        $data['comment'] = Comment::where('id', $commentId)->first();
        return view('admin.comments.answer', $data);
    }
}
