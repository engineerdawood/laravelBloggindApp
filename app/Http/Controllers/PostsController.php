<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index' , [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->count();


        if($categories < 1){
            Session::flash('danger' , 'Can not create post, You donot have any category');
            return redirect()->back();
        }

        return view('admin.posts.create')->with('categories', Category::all(['id','name']))
                                         ->with('tags' , Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->tags);

        $validatedData = $request->validate([
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

        $featured = $request->featured;

        $featuredNewName = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts' , $featuredNewName);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/'.$featuredNewName,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title)
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success' , 'Post created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.posts.edit' , [
            'post' => Post::find($id),
            'categories' => Category::all(['id','name']),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'featured' => 'image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

        $post = Post::find($id);

        if($request->hasFile('featured')){
            $featured = $request->featured;

            $featuredNewName = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts' , $featuredNewName);

            $post->featured = 'uploads/posts/'.$featuredNewName;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);

        $post->update();

        $post->tags()->sync($request->tags);

        Session::flash('info' , 'Post has been updated');

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'The post has been successfully Trashed!');

        return redirect()->back();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trash', [
            'posts' => $posts
        ]);
    }

    public function kill($id){

        Post::withTrashed()->where('id' , $id)->forceDelete();
        Session::flash('success','Your post has been permanently deleted');
        return redirect()->back();

    }
    public function restore($id){
        $post = Post::withTrashed()->where('id' , $id)->first();
        $post->restore();

        Session::flash('success','Your post has been restored');
        return redirect()->route('posts');
    }

}
