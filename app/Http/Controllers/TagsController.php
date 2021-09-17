<?php

namespace App\Http\Controllers;

use App\Models\tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tags = tags::all();
    return view('tags.index')->with('tags' , $tags);
    }


    public function create()
    {
      return view("tags.create");
    }

   
    public function store(Request $request)
    {
     $this->validate($request,[
         'tag' => 'required'
     ]);

     $tags = Tags::create([
        'tag' =>  $request->tag
       
    ]);
    return redirect()->back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show(tags $tags)
    {
        //
    }

    public function edit(tags $tags,$id)
    {
        $tags = Tag::find($id);
        return view('tags.edit')->with('tag',$tags);
    }

    public function update(Request $request, tags $tags,$id)

    {
    $tags = Tags::find($id);
    $this->Validate($request,[
        'tag' => 'required'
    ]);

    $tags->tag = $request->tag;
    $tags->save();
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return redirect()->back();
    }
}
