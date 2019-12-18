<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPostController extends Controller
{    
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    /*public function __construct()
    {
        //This is whitelisting, more secure
        //$this->middleware('auth')->except('index');           I'm using the middleware stuff it in one file: web.php 
        
        //or: $this->middleware('auth')->only('x', 'y',);
    } */    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = BlogPost::all();

        //This is where I would paginate all of the blogposts

        return view('blogposts.index', ['blogposts' => $blogPosts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogposts.createBlogPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['title']);
        // Id like to request more: dd($request->all()); 
        //$request->sanitize();
        //$request->initialize();

        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'topic' => 'required',
        ]);

        //return "Passed Validation"; 

        $bp = new BlogPost;
        $bp->user_id = auth()->id();
        $bp->creator = auth()->getName();
        $bp->title = $validatedData['title'];
        $bp->content = $validatedData['content'];
        $bp->votes = 0;
        $bp->topic = $validatedData['topic'];

        //ToDo: $u->sanitize(); ??

        $bp->save();
                        //ToDo: Make message dynamic
        session()->flash('message', 'BlogPost created.');

        return redirect()->route('blogposts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
{   // I attempted Model view binding, but no ( Beginning of lecture 12.)

    /*
      Get every comment from db, pass to the show view
      have that view display all the comments related to the blogpost using the ids  
    */
    $comments = Comment::all();
    
    $blogPost = BlogPost::findOrFail($id);

    return view('blogposts.show', ['blogPost' => $blogPost, 'comments' => $comments]);

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        
        $blogPost = BlogPost::findOrFail($id);
        
        return view('blogposts.update', ['blogPost' => $blogPost]);

        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'topic' => 'required',
        ]);

        //return "Passed Validation"; 

        $bp = update;
        $bp->user_id = auth()->id();
        $bp->creator = auth()->getName();
        $bp->title = $validatedData['title'];
        $bp->content = $validatedData['content'];
        $bp->votes = 0;
        $bp->topic = $validatedData['topic'];

        //ToDo: $u->sanitize(); ??

        $bp->save();
                        //ToDo: Make message dynamic
        session()->flash('message', 'BlogPost created.');

        return redirect()->route('blogposts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogPost = BlogPost::findOrFail($id);

        $blogPost->delete();

        return redirect()->route('blogposts.index')->with('message', 'Blogpost was deleted');
    }
}
