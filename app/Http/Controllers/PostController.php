<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }
    public function trashed()
    {
        $post = Post::onlytrashed()->get();
        return view('posts.trashed')->with('post',$post);   
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request , [
         'title' => 'required' ,
         'content' => 'required' ,
        'photo'=> 'required|image' 
        ]);
        $photo = $request->photo;
        $newphoto = time().$photo->getclientoriginalname();
        $photo->move('uploads/posts',$newphoto);
        $post = Post::create([
            'user_id' => Auth::id(),
        'title' => $request->title ,
        'content' => $request->content  ,
        'photo'=> 'uploads/posts/'.$newphoto ,
        
        'slug' => str_slug($request->title)
]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post,$slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('posts.show')->with('post',$post);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post,$id)
    {
        $post = Post::find($id);
        $this->validate($request , [
            'title' => 'required' ,
            'content' => 'required' 
           ]);
          // dd($request->all());
           if($request->has('photo')){
            $photo = $request->photo;
            $newphoto = time().$photo->getclientoriginalname();
            $photo->move('uploads/posts',$newphoto);
            $post->photo = 'uploads/posts/'.$newphoto;
           };
          
           $post->title = $request->title;
           $post->content = $request->content;
           $post->save();
           return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,$id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function hdelete(Post $post,$id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forecDelete();
        return redirect()->back();
    }
    public function restore(Post $post,$id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->back();

    }
}
