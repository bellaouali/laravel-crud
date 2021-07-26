<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $blog = Blog::get();
        return view('blog.index')->with('blogs', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            $this->validate($request,[
            'title' => 'required|max:25',
            'body' =>  'required|min:25',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();
        return redirect()->route('blog.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
   
        $blog = Blog::find($id);
        return view('blog.edit')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $this->validate($request,[
            'title' => 'required|max:25',
            'body' =>  'required|min:25',

        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->update();
        return redirect()->route('blog.index', $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){

        $blog =  Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');

    }
}
