<?php

namespace App\Http\Controllers;

use App\BlogPost;
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

        $validatedData = $request->validate([

            //ToDo: Add 'password' 
            'creator' => 'required|max:30',
            'email' => 'required',
            'content' => 'required',
            'votes' => 'required|integer',
            'topic' => 'required',

        ]);

        //return "Passed Validation"; 

        $bp = new BlogPost;
        $bp->creator = $validatedData['creator'];
        $bp->email = $validatedData['email'];
        $bp->content = $validatedData['content'];
        $bp->votes = $validatedData['votes'];
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
    public function show($id)
{
    $blogPost = BlogPost::findOrFail($id);

    return view('blogposts.show', ['blogPosts' => $blogPost]);

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
