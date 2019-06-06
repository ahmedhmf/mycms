<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BlogPostController extends Controller
{
    public function index(){
      $posts= Post::with('user')
                ->where('published_at', '<', Carbon::now())
                ->orderBy('published_at','desc')
                ->paginate(15);
      return view('blog.index', ['posts'=>$posts]);
    }
}
