<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Post;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
  public function index()
  {
    
    $categories = Category::all();
    $tags = Tag::all();
    $posts = Post::with(['author', 'category', 'images', 'videos', 'comments', 'tags'])->paginate(50);
    return view('model.post.index', compact('posts', 'categories', 'tags'));
  }
  public function show($id)
  {
    $post =  Post::findOrFail($id);
    return view('model.post.show', compact('post'));
  }

  public function store(Request $request)
  {
   
    $data = $this->validatePostDetails() + array('author_id' => Auth::id());
    $post_id = Post::create($data);
    $this->storePostTag($post_id['id'], $request);
    $this->saveAttachment($request,$post_id['id']);
    return back()->with('msg', 'Post Added Successfully');
  }
  public function delete($id)
  {
    Post::whereId($id)->delete();
    return back()->with('msg', 'Post Deleted Successfully');
  }

  public function validatePostDetails()
  {
    return
      request()->validate(
        [
          'title' => "required|string",
          'content' => "required|string",
          'post_type' => "required|string",
          'categories_id' => "required|numeric",
          'meta_data' => "",
        ]
      );
  }

  public function storePostTag($post_id, $request)
  {
    if ($request->has('tag_id')) {
      foreach ($request->tag_id as $id) {
        DB::table('post_tag')->insert([
          'post_id' => $post_id,
          'tag_id' => $id
        ]);
      }
    }
  }


  public function saveAttachment($request, $post_id)
  {
    foreach ($request->url as $url) {
      $file_type = explode('/', trim($url->getMimeType()));
      if ($file_type[0] == "video") {
        $path = Storage::putFile('posts/attachments/videos/', $url);
        $video_path = $url->storeAs("public", $path);
        Video::create(['title' => "null", 'url' => $video_path, 'post_id' => $post_id]);
      }
      elseif($file_type[0] == "image"){
        $path = Storage::putFile('posts/attachments/images/', $url);
        $Image_path = $url->storeAs("public", $path);
        Image::create(['title' => "null", 'url' => $Image_path, 'post_id' => $post_id,'featured'=>true]);
      }
      else {
        return back()->with('msg','Wrong File Upload. Upload Image or Video');
      
      };
    }
  }
}
